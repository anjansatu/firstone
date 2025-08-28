const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const publicDir = path.join(__dirname, 'public');

const server = http.createServer((req, res) => {
  const filePath = path.join(publicDir, req.url === '/' ? 'index.html' : req.url);
  fs.readFile(filePath, (err, content) => {
    if (err) {
      res.writeHead(404, { 'Content-Type': 'text/plain' });
      res.end('Not Found');
    } else {
      const ext = path.extname(filePath).toLowerCase();
      const type = ext === '.html' ? 'text/html' : 'text/plain';
      res.writeHead(200, { 'Content-Type': type });
      res.end(content);
    }
  });
});

server.listen(PORT, () => {
  console.log(`Admin panel available at http://localhost:${PORT}`);
});
