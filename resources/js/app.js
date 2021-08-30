const { default: axios } = require('axios');

require('./bootstrap');



// document.getElementById('registerURLS').addEventListener('click', (event) => {
//     event.preventDefault()

//     axios.post('register-urls', {})
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('response').innerHTML = response.data.errorMessage
//         }
//         console.log(response.data);
//     })
//     .catch((error) => {
//         console.log(error);
//     })

// });

document.getElementById('stkpush').addEventListener('click', (event) => {
    event.preventDefault()

    const requestBody = {
        amount: document.getElementById('amount').value,
        account: document.getElementById('account').value,
        phone: document.getElementById('phone').value
    }

    axios.post('stkpush', requestBody)
    .then((response) => {
        if(response.data.ResponseDescription){
            document.getElementById('c2b_response').innerHTML = response.data.ResponseDescription
        } else {
            document.getElementById('c2b_response').innerHTML = response.data.errorMessage
        }
    })
    .catch((error) => {
        console.log(error);
    })
})

// document.getElementById('sendSMS').addEventListener('click', (event) => {
//     event.preventDefault()

//     const requestBody = {
//         phone: document.getElementById('phone').value,
//         message: document.getElementById('message').value,
//     }

//     axios.post('api/v1/sms', requestBody)
//     .then((response) => {
//         if(response.data.ResponseDescription){
//             document.getElementById('twilio_response').innerHTML = response.data.ResponseDescription
//         } else {
//             document.getElementById('twilio_response').innerHTML = response.data.errorMessage
//         }
//     })
//     .catch((error) => {
//         console.log(error);
//     })
// })