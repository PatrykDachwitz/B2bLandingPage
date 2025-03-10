<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}

    const consentUser = localStorage.getItem("user_consent");
    const userMarketingCookie = localStorage.getItem("user_consent");
    const userPreferenceCookie = localStorage.getItem("user_consent");
    const userStatisticCookie = localStorage.getItem("user_consent");

    if (consentUser === 'true') {
        gtag('consent', 'update', {
            'analytics_storage': userStatisticCookie,
            'ad_storage': userMarketingCookie,
            'ad_user_data': userMarketingCookie,
            'ad_personalization': userMarketingCookie,
            'functionality_storage': userPreferenceCookie,
            'personalization_storage': userPreferenceCookie,
        });
    } else {
        gtag('consent', 'default', {
            ad_personalization: "denied",
            ad_storage: "denied",
            ad_user_data: "denied",
            analytics_storage: "denied",
            functionality_storage: "denied",
            personalization_storage: "denied",
            security_storage: "granted",
            wait_for_update: 2500
        });
    }

</script>
