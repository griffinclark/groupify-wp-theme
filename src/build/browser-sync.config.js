module.exports = {
	"proxy": "https://groupifywp.localhost/",
	"host": "groupifywp.localhost",
	"port": 8000,
	"notify": false,
	"files": ["./css/*.min.css", "./js/*.min.js", "./**/*.php"],
	"https": {
		"key": "/Users/trangvo/.config/valet/Certificates/groupifywp.localhost.key",
		"cert": "/Users/trangvo/.config/valet/Certificates/groupifywp.localhost.crt"
	}
};