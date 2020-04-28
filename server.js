const express = require('express')
const app = express()
const port = 3000
var bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({
  extended: true
}))
app.use(bodyParser.json())
var urlencodedParser = bodyParser.urlencoded({ extended: false })

app.get('/', (req, res) => {
        console.log(req.headers)
        res.send('Hello World!')
})

app.post('/', urlencodedParser, (req,res) => {
        console.log(req.headers)
        console.log(req.body)
        res.send('Recieved Data!')
})

app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`))
