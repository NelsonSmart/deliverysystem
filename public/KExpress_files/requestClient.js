"use strict";

const RequestClient = function () {
    let requestType = '';
    let requestUrl = '';
    let requestData = '';

    const makeRequest = () => {
        return $.ajax({
            url: requestUrl,
            method: requestType,
            dataType: 'JSON',
            data: requestData
        });
    };

    const get = (url) => {
        requestType = 'GET';
        requestUrl = url;
        requestData = '';
        return makeRequest();
    };

    return {get};
};
