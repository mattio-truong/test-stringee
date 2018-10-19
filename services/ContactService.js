import Api from '@/services/Api'

export default {
    actLogin (params) {
        return Api().POST('/v1/account?email=' + params.email + '&password=' + params.password)
    }
}