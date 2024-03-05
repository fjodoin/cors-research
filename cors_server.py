# cors_server.py
from http.server import HTTPServer, SimpleHTTPRequestHandler

class CORSRequestHandler(SimpleHTTPRequestHandler):
    def end_headers(self):
        self.send_header('Access-Control-Allow-Origin', '*')
        return super().end_headers()

if __name__ == '__main__':
    httpd = HTTPServer(('localhost', 1337), CORSRequestHandler)
    httpd.serve_forever()
