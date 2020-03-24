<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/welcome.css">
    <title>LoveMeter</title>


    <!-- Quantcast Choice. Consent Manager Tag -->
    <script type="text/javascript" async=true>
        var elem = document.createElement('script');
        elem.src = 'https://quantcast.mgr.consensu.org/cmp.js';
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
        (function() {
            var gdprAppliesGlobally = true;
            function addFrame() {
                if (!window.frames['__cmpLocator']) {
                    if (document.body) {
                        var body = document.body,
                            iframe = document.createElement('iframe');
                        iframe.style = 'display:none';
                        iframe.name = '__cmpLocator';
                        body.appendChild(iframe);
                    } else {
                        // In the case where this stub is located in the head,
                        // this allows us to inject the iframe more quickly than
                        // relying on DOMContentLoaded or other events.
                        setTimeout(addFrame, 5);
                    }
                }
            }
            addFrame();
            function cmpMsgHandler(event) {
                var msgIsString = typeof event.data === "string";
                var json;
                if(msgIsString) {
                    json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
                } else {
                    json = event.data;
                }
                if (json.__cmpCall) {
                    var i = json.__cmpCall;
                    window.__cmp(i.command, i.parameter, function(retValue, success) {
                        var returnMsg = {"__cmpReturn": {
                                "returnValue": retValue,
                                "success": success,
                                "callId": i.callId
                            }};
                        event.source.postMessage(msgIsString ?
                            JSON.stringify(returnMsg) : returnMsg, '*');
                    });
                }
            }
            window.__cmp = function (c) {
                var b = arguments;
                if (!b.length) {
                    return __cmp.a;
                }
                else if (b[0] === 'ping') {
                    b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
                        "cmpLoaded": false}, true);
                } else if (c == '__cmp')
                    return false;
                else {
                    if (typeof __cmp.a === 'undefined') {
                        __cmp.a = [];
                    }
                    __cmp.a.push([].slice.apply(b));
                }
            }
            window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
            window.__cmp.msgHandler = cmpMsgHandler;
            if (window.addEventListener) {
                window.addEventListener('message', cmpMsgHandler, false);
            }
            else {
                window.attachEvent('onmessage', cmpMsgHandler);
            }
        })();
        window.__cmp('init', {
            'Language': 'en',
            'Initial Screen Reject Button Text': 'I DO NOT ACCEPT',
            'Initial Screen Accept Button Text': 'I ACCEPT',
            'Purpose Screen Body Text': 'You can set your consent preferences and determine how you want your data to be used based on the purposes below. You may set your preferences for us independently from those of third-party partners. Each purpose has a description so that you know how we and partners use your data.',
            'Purpose Screen Vendor Link Text': 'See Vendors',
            'Purpose Screen Save and Exit Button Text': 'SAVE &amp; EXIT',
            'Vendor Screen Body Text': 'You can set consent preferences for individual third-party partners we work with below. Expand each company list item to see what purposes they use data for to help make your choices. In some cases, companies may use your data without asking for your consent, based on their legitimate interests. You can click on their privacy policy links for more information and to object to such processing. ',
            'Vendor Screen Accept All Button Text': 'ACCEPT ALL',
            'Vendor Screen Reject All Button Text': 'REJECT ALL',
            'Vendor Screen Purposes Link Text': 'Back to Purposes',
            'Vendor Screen Save and Exit Button Text': 'SAVE &amp; EXIT',
            'Initial Screen Body Text': 'We and our partners use technologies, such as cookies, and process personal data, such as IP addresses and cookie identifiers, to personalise ads and content based on your interests, measure the performance of ads and content, and derive insights about the audiences who saw ads and content. Click below to consent to the use of this technology and the processing of your personal data for these purposes. You can change your mind and change your consent choices at any time by returning to this site. ',
            'Initial Screen Body Text Option': 1,
            'Publisher Name': 'Mohamed',
            'Display UI': 'always',
            'Publisher Purpose IDs': [1],
        });
    </script>
    <!-- End Quantcast Choice. Consent Manager Tag -->
    <style>
        .qc-cmp-button {
            background-color: #F0071D !important;
            border-color: #F0071D !important;
        }
        .qc-cmp-button:hover {
            background-color: transparent !important;
            border-color: #F0071D !important;
        }
        .qc-cmp-alt-action,
        .qc-cmp-link {
            color: #F0071D !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button:hover
        {
            border-color: transparent !important;
            background-color: #F0071D !important;
        }
        .qc-cmp-button {
            color: #FFFFFF !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button {
            color: #FFFFFF !important;
        }
        .qc-cmp-button.qc-cmp-button.qc-cmp-secondary-button:hover {
            color:#ffffff !important;
        }
        .qc-cmp-button.qc-cmp-secondary-button {
            border-color: #F06365 !important;
            background-color: #F06365 !important;
        }
    </style>

</head>
<body>
<div class="banner">
    <h1>LoveMeter</h1>
</div>

@yield("content")


<div class="text">
    <hr>
    <p><b>Dit was niet mijn idee</b></p>
</div>
