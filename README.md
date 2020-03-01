## 最新
新版本已开发完成，做了如下改进：

🌈 支持本地Sqlite存储，也支持MySQL和MongoDB存储。

🌍 国际化，支持英语/简体中文/繁体中文。

🛡 可通过Composer极速安装。

🎨 一句命令运行监控服务。

🌈 支持帐号密码登录。

更多新功能欢迎前往 https://github.com/laynefyc/php-monitor 体验。

## 历史
新版本已经在开发中，后端功能全部开发完成，前端页面开发还在努力中。由于前端技术更新太快，不打算jQuery一把梭了，新版本会用上vue或者react，所以我也是边学习边开发。

公众号写了有一段时间，里面的内容也充实了不少，相比博客质量更高一些，分享的内容更成体系，有兴趣的关注看看。

[http://imgs.it2048.cn/code-log.png](http://imgs.it2048.cn/code-log.png)

提交Issue之前请看看 README.md(当前页面)和历史已经处理的 [Closed Issue](https://github.com/laynefyc/xhgui-branch/issues?q=is%3Aissue+is%3Aclosed)90%的问题都能找到答案。另外10%的问题请按照Issue模板中需要的信息提交，你提供的信息越多我越能给你准确的建议，不按照规范提交的Issue我会直接关闭。

2019年想定个目标 - 重写xhprof扩展和xhgui-branch，有兴趣的朋友请移步到我的博客留言交流一下 [我的博客](http://blog.it2048.cn/)

获取底层信息的PHP扩展很多，比如 uprofiler,tideways_xhprof,tideways,xhprof等，他们的原理都一样，只是兼容性与稳定性的差别（选择一个安装，安装多个会冲突）。

````
Class 'MongoClient' not found
Fatal error: Call to undefined function xhprof_enable()
````
如出现上面的报错信息，请使用`php -m` 看看是否有tideways或者tideways_xhprof扩展。 再修改 [config/config.default.php#L12](https://github.com/laynefyc/xhgui-branch/blob/ad6e0c0a3eaf9b5b0438cd4a3d3db937f1954058/config/config.default.php#L12) 配置文件的扩展名。 如果还有问题请检查vendor 目录下是否存在 alcaeus/mongo-php-adapter扩展文件（这是一个兼容mongo.so和mongodb.so的适配器）。如果不存在请更新代码（git pull origin master），然后运行composer install安装。

90%的问题都能在 **ISSUE** 中找到答案 [ISSUE](https://github.com/laynefyc/xhgui-branch/issues?q=is%3Aissue+is%3Aclosed) 

tideways的新版扩展已经更名，并且不支持SQL显示，建议使用支持SQL展示的V4版本  [v4.1.6](https://github.com/tideways/php-xhprof-extension/tree/v4.1.6)   

如果一定要使用V5版本，请修改配置文件   [config/config.default.php#L12](https://github.com/laynefyc/xhgui-branch/blob/ad6e0c0a3eaf9b5b0438cd4a3d3db937f1954058/config/config.default.php#L12)  为 tideways_xhprof

已添加SQL列表与SQL执行时间展示（暂时只支持tideways扩展），下文有截图。 

## xhgui汉化与更新

xhgui的安装信息可到源项目查看文档：[xhgui](https://github.com/perftools/xhgui)  

如果不能安装成功可到我博客看这篇文章：[Tideways和xhgui打造PHP非侵入式监控平台](http://blog.it2048.cn/article_tideways-xhgui.html) 

当然最好的方式就是联系我,我的博客：[https://blog.it2048.cn](https://blog.it2048.cn)

[![Latest Stable Version](https://poser.pugx.org/laynefyc/xhgui-chinese/v/stable.png)](https://packagist.org/packages/laynefyc/xhgui-chinese)
[![Total Downloads](https://poser.pugx.org/laynefyc/xhgui-chinese/downloads.png)](https://packagist.org/packages/laynefyc/xhgui-chinese)
[![Build Status](https://travis-ci.org/laynefyc/xhgui-branch.svg?branch=master)](https://travis-ci.org/laynefyc/xhgui-branch)

### 一. 站在举人的肩膀上

项目的汉化参考了 [https://github.com/snfnwgi/xhgui](https://github.com/snfnwgi/xhgui)，对部分翻译不够准确的词做了修改，对未翻译的部分做了翻译。
	
xhgui源项目已经很久不更新了。我在基于xhgui搭建PHP监控平台的过程中遇到很多问题，自己对PHP和前端都还算了解，打算边修边优化并将更新的代码开源。

### 二. 为什么不直接在源项目提交Merge Request？

我会将一些基本的语法Bug修复后提交Merge Request。但汉化的修改不会提，主要原因是xhgui源项目对代码的要求基本是可用就可的程度，后期扩展的添加混乱的一塌糊涂。维护代码的人也焦头烂额，很多显而易见的错误都没人修。我无法保证我提的代码被及时的采纳。xhgui的UI主要是针对老外设计的，很多符号和数据单位我看着不习惯，一些交互也不友好，这个项目主要会对这方面做改动所以不适合提交Merge Request。

### 三. 界面截图
首页截图
![首页截图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/homepage.png)

瀑布图
![瀑布图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/waterfall.png)

函数监控图
![函数监控图](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/view-function.png)

SQL列表
![SQL列表](https://github.com/laynefyc/xhgui-branch/raw/screenshot/screenshot/sql_list.png)

### 四. 更新日志
1. 将时间选择控件换成了更符合国人使用习惯的laydate;
2. 将时间的格式转换成了 2017-06-08 12:18:18 格式；
3. 将微妙转换成了毫秒，byte转换成了MB或者KB；
4. 添加了IP的展示；
5. 将中文URL做了url_decode();
6. 将页面的大标题去掉，换成用颜色选中的Nav标签展示；
7. 修复了『自定义函数』功能无法使用的问题；
8. 翻译了大量英文描述；
9. 很多小Tips等待有心人去发现；
10. 支持composer更新；

### 五. TODO
1. 将前端展示页面抽离出来；
2. 支持多域名的显示；

### 六. 通过Composer安装&更新

````bash
composer require laynefyc/xhgui-chinese
````

### 七. 常见问题
1. 如果数据显示不全，内存和执行等信息都是空，请排查PHP扩展程序，tideways和xhprof并不支持所有操作系统和所有PHP版本；
2. 如果mongoDB中的数据是空，请检查mongoDB的配置，header.php文件的引入是否规范；
3. 提交Issues请带上操作系统，PHP版本，扩展名和扩展版本。只提供一句话很难给你建议；
4. 历史问题在这里 [https://github.com/laynefyc/xhgui-branch/issues?utf8=%E2%9C%93&q=is%3Aissue](https://github.com/laynefyc/xhgui-branch/issues?utf8=%E2%9C%93&q=is%3Aissue)

## 八. 既然看到这了不如加个微信吧

![https://github.com/laynefyc/xhgui-branch/blob/screenshot/screenshot/code-log1.png](https://github.com/laynefyc/xhgui-branch/blob/screenshot/screenshot/code-log1.png)

[http://imgs.it2048.cn/code-log.png](http://imgs.it2048.cn/code-log.png)

