//import axios
import axios from "axios";
const Api = axios.create({
    //samakan dengan url api Laravel modul 5
    baseURL: "http://172.16.99.178:1337",
});
export default Api;
