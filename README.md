
## xhgui汉化与更新

xhgui的安装信息可到源项目查看文档：[xhgui](https://github.com/perftools/xhgui)  

如果不能安装成功可到我博客看这篇文章：[Tideways和xhgui打造PHP非侵入式监控平台](http://blog.it2048.cn/article_tideways-xhgui.html) 

当然最好的方式就是联系我,我的博客：[http://blog.it2048.cn](http://blog.it2048.cn)

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
