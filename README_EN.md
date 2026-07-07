# 白鹿io导航 (Bailu IO Nav)

[中文](./README.md) | English

___

白鹿io导航 is a personal bookmark navigation management tool based on OneNav, developed using PHP + SQLite 3. It features a simple interface, easy installation, and convenient usage. It helps you manage your browser bookmarks centrally, solving the problems of syncing and accessing across devices, platforms, and browsers.

## Feature Highlights

* AI-powered link matching
* Link batch checking
* Backend management
* Private links
* Bulk import of bookmarks from Chrome/Firefox/Edge
* Multiple theme styles
* Automatic link information recognition
* API
* Docker deployment
* Secondary categories
* Browser extension for Chromium kernel
* Online updates
* Mobile version backend

## Installation

**Regular Installation:**

1. Requires PHP environment and must support SQLite3
2. Download and unzip the source code to the root directory of the site
3. Visit the homepage and follow the prompts to initialize username/password
4. Access the backend: `http://IP/index.php?c=login`

**Docker Deployment:**

```bash
docker run -itd --name="onenav" -p 80:80 \
    -v /data/onenav:/data/wwwroot/default/data \
    helloz/onenav:0.9.32
```

> For more instructions, please refer to the help document: https://dwz.ovh/onenav

## Bailu IO Links

* Website: [https://www.bailuioai.com/](https://www.bailuioai.com/)
* News: [https://news.bailuioai.com/](https://news.bailuioai.com/)

## Acknowledgements

Based on [OneNav](https://github.com/helloxz/onenav). Thanks to xiaoz for the original work.

* [WebStackPage](https://github.com/WebStackPage/WebStackPage.github.io)
* [LayUI](https://github.com/sentsin/layui)
* [Medoo](https://github.com/catfan/Medoo)
* [MDUI](https://github.com/zdhxiong/mdui)
