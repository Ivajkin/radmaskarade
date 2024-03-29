var isFontFaceSupported = (function(){
    var
    sheet, doc = document,
    head = doc.head || doc.getElementsByTagName('head')[0] || docElement,
    style = doc.createElement("style"),
    impl = doc.implementation || { hasFeature: function() { return false; } };

    style.type = 'text/css';
    head.insertBefore(style, head.firstChild);
    sheet = style.sheet || style.styleSheet;

    var supportAtRule = impl.hasFeature('CSS2', '') ?
        function(rule) {
            if (!(sheet && rule)) return false;
            var result = false;
            try {
                sheet.insertRule(rule, 0);
                result = !(/unknown/i).test(sheet.cssRules[0].cssText);
                sheet.deleteRule(sheet.cssRules.length - 1);
            } catch(e) { }
            return result;
        } :
        function(rule) {
            if (!(sheet && rule)) return false;
            sheet.cssText = rule;

            return sheet.cssText.length !== 0 && !(/unknown/i).test(sheet.cssText) &&
              sheet.cssText
                    .replace(/\r+|\n+/g, '')
                    .indexOf(rule.split(' ')[0]) === 0;
        };

    return supportAtRule( '@font-face { font-family: "font"; src: "font.ttf"; }' );
})();