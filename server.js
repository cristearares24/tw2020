const http = require('http');
const fs = require('fs');
const path = require('path');
const port = 3000;

const server = http.createServer(function (req, res) {

    if (req.url === "/" || req.url === "/home.html") {
        fs.readFile("home.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    } else if (req.url === "/myProfile.html") {
        fs.readFile("myProfile.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/quiz1.html") {
        fs.readFile("quiz1.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    } else if (req.url === "/tutorial1.html") {
        fs.readFile("tutorial1.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/tutorial2.html") {
        fs.readFile("tutorial2.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/tutorial3.html") {
        fs.readFile("tutorial3.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/tutorial4.html") {
        fs.readFile("tutorial4.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/tutoriale.html") {
        fs.readFile("tutoriale.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/unelte.html") {
        fs.readFile("unelte.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url === "/login.html") {
        fs.readFile("login.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }else if (req.url === "/register.html") {
        fs.readFile("register.html", "UTF-8", function (err, html) {
            res.writeHead(200, { "Content-Type": "text/html" });
            res.end(html);
        });
    }
    else if (req.url.match("\.css$")) {
        var cssPath = path.join(__dirname, 'style', req.url);
        console.log(cssPath);
        var fileStream = fs.createReadStream(cssPath, "UTF-8");
        res.writeHead(200, { "Content-Type": "text/css" });
        fileStream.pipe(res);
    }
    else if (req.url.match("\.jpg$")) {
        var imagePath = path.join(__dirname, req.url);
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, { "Content-Type": "image/jpg" });
        fileStream.pipe(res);
    } else if (req.url.match("\.png$")) {
        var imagePath = path.join(__dirname, req.url);
        var fileStream = fs.createReadStream(imagePath);
        res.writeHead(200, { "Content-Type": "image/png" });
        fileStream.pipe(res);
    } else {
        res.writeHead(404, { "Content-Type": "text/html" });
        res.end("No Page Found");
    }
});

server.listen(port, function (error) {
    if (error) {
        console.log('Something went wrong', error)
    } else {
        console.log('Server is listening on port ' + port)
    }
});
