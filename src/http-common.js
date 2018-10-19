import axios from 'axios';

const ajax = axios.create({
   baseURL: `https://pcc-test.stringee.com/`
 })

ajax.CancelToken = axios.CancelToken
ajax.isCancel = axios.isCancel

/*
 * The interceptor here ensures that we check for the token in local storage every time an ajax request is made
 */
ajax.interceptors.request.use(
  (config) => {
    let token = localStorage.getItem('auth_token')

    if (token) {
		alert(123);
      config.headers['Authorization'] = `Bearer ${ token }`
    }

    return config
  },

  (error) => {
    return Promise.reject(error)
  }
)

export default ajax