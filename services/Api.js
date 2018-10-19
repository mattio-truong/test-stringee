import axios from 'axios'

export default() => {
    return axios.create({
        baseURL: `https://pcc-test.stringee.com`,
        withCredentials: false,
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        }
    })
}