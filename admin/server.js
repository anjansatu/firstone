const http = require('http');
const fs = require('fs');
const path = require('path');

const PORT = process.env.PORT || 3000;
const publicDir = path.join(__dirname, 'public');

const podcasts = [
  { name: 'Mindful Wanderers', duration: '45 mins', category: 'Travel', latest: 'Ep 120: The Journey Within', avg: '40 mins' },
  { name: 'Science Explained', duration: '30 mins', category: 'Science', latest: 'Ep 45: Quantum Realities', avg: '32 mins' },
  { name: 'Business Buzz', duration: '50 mins', category: 'Finance', latest: 'Ep 30: Market Trends', avg: '48 mins' }
];

  const routes = {
    '/': 'index.html',
    '/admin': 'admin.html',
    '/dashboard': 'dashboard.html'
  };

  const server = http.createServer((req, res) => {
    if (req.url === '/api/podcasts') {
      res.writeHead(200, { 'Content-Type': 'application/json' });
      return res.end(JSON.stringify(podcasts));
    }

    const filePath = path.join(publicDir, routes[req.url] || req.url);
    fs.readFile(filePath, (err, content) => {
const server = http.createServer((req, res) => {
  if (req.url === '/api/podcasts') {
    res.writeHead(200, { 'Content-Type': 'application/json' });
    return res.end(JSON.stringify(podcasts));
  }

  const filePath = path.join(publicDir, req.url === '/' ? 'index.html' : req.url);
  fs.readFile(filePath, (err, content) => {
    if (err) {
      res.writeHead(404, { 'Content-Type': 'text/plain' });
      res.end('Not Found');
    } else {
      const ext = path.extname(filePath).toLowerCase();
      const types = { '.html': 'text/html', '.js': 'application/javascript', '.css': 'text/css' };
      const type = types[ext] || 'text/plain';
      res.writeHead(200, { 'Content-Type': type });
      res.end(content);
    }
  });
});

  server.listen(PORT, () => {
    console.log(`Server running at http://localhost:${PORT}`);
  });
server.listen(PORT, () => {
  console.log(`Admin panel available at http://localhost:${PORT}`);
});
