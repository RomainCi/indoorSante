export default {
    recuperationClient, recuperationSystem
}
const userAgent = navigator.userAgent;

function recuperationClient() {
    console.log(userAgent);
    if (userAgent.indexOf("Safari") !== -1) {
        if (userAgent.indexOf("Chrome") !== -1) {
            return "chrome";
        } else {
            return "safari";
        }
    }
    return "firefox";
}

function recuperationSystem() {
    if ((userAgent.indexOf("iPhone") !== -1) || (userAgent.indexOf("iPad") !== -1)) {
        return "iphone";
    } else if (userAgent.indexOf("Macintosh") !== -1) {
        return "mac";
    }
    return "other";
}