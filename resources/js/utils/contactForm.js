export class ContactForm {
    containerFormData;
    buttonSendContact;
    constructor(data) {
        this.containerFormData = document.querySelector(`[${data}]`);

        this.initButton();
    }
    initButton() {
        this.buttonSendContact = this.containerFormData.querySelector('button.formContact__button');

        this.buttonSendContact.addEventListener('click', e => {
            this.sendContact(e);
        })
    }
    getValueText(name) {
        return document.querySelector(`[name="${name}"]`).value;
    }

    getCheckValue(name) {
        return document.querySelector(`[name="${name}"]`).checked;
    }
    getInputValues() {
        let formInputs = {}

        let names = this.getValueText('names');
        if (names !== '') {
            formInputs.names = names;
        }
        let email = this.getValueText('email');
        if (email !== '') {
            formInputs.email = email;
        }
        let phone = this.getValueText('phone');
        if (phone !== '') {
            formInputs.phone = phone;
        }
        let message = this.getValueText('message');
        if (message !== '') {
            formInputs.message = message;
        }

        formInputs.rule_one = this.getCheckValue('rule_one');
        formInputs.rule_second = this.getCheckValue('rule_second');

        return JSON.stringify(formInputs);
    }

    getActionUrl() {
        return this.containerFormData.action;
    }

    getTokenCsrf() {
        return this.containerFormData.querySelector('[name="_token"]').value
    }

    clearMsgErrors() {
        const errorsMsg = [
            'names',
            'email',
            'phone',
            'message',
            'rule_one',
            'rule_second',
        ]

        errorsMsg.forEach(input => {
            document.querySelector(`[data-form="${input}"]`).innerText = '';
            document.querySelector(`[data-form="${input}"]`).style.display = 'none';
        });
    }

    addErrorComment(input, value) {
        document.querySelector(`[data-form="${input}"]`).innerText = value;
        document.querySelector(`[data-form="${input}"]`).style.display = 'block';
    }

    errorsWrite(json) {
        json.then(errors => {
            let keys = Object.keys(errors.errors);

            keys.forEach(key => {
                this.addErrorComment(key, errors.errors[key]);
            })
        })
    }

    successMessage(json) {
        json.then(message => {
            document.querySelector(`[data-form-success] > h4`).innerText = message.msg;
            document.querySelector(`[data-form-success]`).style.display = 'block';
        })

    }

    errorsMsg() {
        document.querySelector(`[data-form-danger]`).style.display = 'block';
    }
    sendContact(e) {
        e.preventDefault();
        this.clearMsgErrors();
        let valuesInput = this.getInputValues();

        fetch(this.getActionUrl(), {
            method: 'POST',
            headers: {
              "Content-Type": "application/json",
              "Accept": "application/json",
              "X-CSRF-Token": this.getTokenCsrf(),
            },
            body: valuesInput
        })
            .then(response => {
                if (response.status === 422) {
                    this.errorsWrite(response.json())
                } else if(response.status === 200) {
                    this.successMessage(response.json())
                } else {
                    this.errorsMsg();
                }
            })
            .catch(e => {
                this.errorsMsg();
            })
    }
}
