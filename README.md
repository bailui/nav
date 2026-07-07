# 白鹿io导航

> 基于 OneNav 的个人书签导航管理工具

白鹿io导航是一款功能强大且简洁高效的浏览器书签管理器，支持集中式管理书签，完美解决跨设备、跨平台、跨浏览器的同步与访问难题，实现一处部署、随处访问。

## 功能特色

* 支持AI检索匹配链接
* 支持链接批量检测
* 支持后台管理
* 支持私有链接
* 支持Chrome/Firefox/Edge书签批量导入
* 支持多种主题风格
* 支持链接信息自动识别
* 支持API
* 支持Docker部署
* 支持二级分类
* 支持浏览器扩展（插件）
* 支持后台一键在线升级
* 支持链接拖拽排序
* 支持PWA应用
* 手机版后台

## 安装

**常规安装：**

1. 需安装PHP环境，并确保支持SQLite3
2. 下载源码解压到站点根目录
3. 访问首页根据提示初始化用户名/密码
4. 访问后台：`http://IP/index.php?c=login`

**Docker部署：**

```bash
docker run -itd --name="onenav" -p 3080:80 \
    -v /data/onenav:/data/wwwroot/default/data \
    --restart always \
    helloz/onenav
```

> 更多说明，请参考帮助文档：https://dwz.ovh/onenav

## 白鹿io相关

* 官网：[https://www.bailuioai.com/](https://www.bailuioai.com/)
* 新闻：[https://news.bailuioai.com/](https://news.bailuioai.com/)

## 鸣谢

基于 [OneNav](https://github.com/helloxz/onenav) 项目的二次开发，感谢原作者 xiaoz 的贡献。

* [WebStackPage](https://github.com/WebStackPage/WebStackPage.github.io)
* [LayUI](https://github.com/sentsin/layui)
* [Medoo](https://github.com/catfan/Medoo)
* [MDUI](https://github.com/zdhxiong/mdui)
