module.exports.insertarRegistro = function (db, callback) {
let coleccion = db.collection("users");

let data = [
{ users: "gcastro", pass: "1234" },
{ users: "dcastro", pass: "1234" },
{ users: "gcastro", pass: "1234" },
{ users: "dcastro", pass: "1234" }
]

coleccion.insertMany(data, (error, result) => {
console.log(result.toString())
})

}