<?php
/**
 * PHP Mosaico X API (XAPI) SDK
 * Innobit s.r.l.
 * web: http://www.innobit.it
 * mail: info@innobit.it
 */


namespace XAPISdk\Net;


class HttpCodes {

    // region -- CONSTANTS --

    /**
     * HTTP response code constant
     */
    const
        OK                              = 200,
        CREATED                         = 201,
        ACCEPTED                        = 202,
        NONAUTHORATIVEINFORMATION       = 203,
        NOCONTENT                       = 204,
        RESETCONTENT                    = 205,
        PARTIALCONTENT                  = 206,

        MULTIPLECHOICES                 = 300,
        MOVEDPERMANENTLY                = 301,
        FOUND                           = 302,
        SEEOTHER                        = 303,
        NOTMODIFIED                     = 304,
        USEPROXY                        = 305,
        TEMPORARYREDIRECT               = 307,

        BADREQUEST                      = 400,
        UNAUTHORIZED                    = 401,
        PAYMENTREQUIRED                 = 402,
        FORBIDDEN                       = 403,
        NOTFOUND                        = 404,
        METHODNOTALLOWED                = 405,
        NOTACCEPTABLE                   = 406,
        PROXYAUTHENTICATIONREQUIRED     = 407,
        REQUESTTIMEOUT                  = 408,
        CONFLICT                        = 409,
        GONE                            = 410,
        LENGTHREQUIRED                  = 411,
        PRECONDITIONFAILED              = 412,
        REQUESTENTITYTOOLARGE           = 413,
        REQUESTURITOOLONG               = 414,
        UNSUPPORTEDMEDIATYPE            = 415,
        REQUESTEDRANGENOTSATISFIABLE    = 416,
        EXPECTATIONFAILED               = 417,
        IMATEAPOT                       = 418, // RFC2324

        INTERNALSERVERERROR             = 500,
        NOTIMPLEMENTED                  = 501,
        BADGATEWAY                      = 502,
        SERVICEUNAVAILABLE              = 503,
        GATEWAYTIMEOUT                  = 504,
        HTTPVERSIONNOTSUPPORTED         = 505;

    // endregion

}