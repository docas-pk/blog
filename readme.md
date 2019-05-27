### GIT 相关操作

    git init                                                           初始化项目
    git add .                                                          添加项目文件
    git commit -m "xxx"                                                提交文件到暂存区
    git remote add origin git@github.com:docas-pk/hello_laravel.git    指定远程仓库
    git push -u origin master                                          本地分支绑定远端分支，并将代码提交到远端分支
    git log                                                            查看提交日志
    git branch -vv                                                     查看所有的分支情况
    git checkout -f                                                    使用远端分支覆盖暂存区和本地的修改

### Laravel 前端工作流
    
    SASS 语法基础     Sass 是一种可用于编写 CSS 的语言,借助 Sass 我们可以少写很多 CSS 代码，并使样式代码的编写更加灵活多变
    
    NPM              类似php的composer ,NPM 是 Node.js 的包管理和任务管理工具，其强大的功能也是 Node.js 能够如此成功的因素之一
    Yarn             Yarn 是 Facebook 在 2016 年 10 月开源的一个新的包管理器
    Mix              Laravel Mix 一款前端任务自动化管理工具，使用了工作流的模式对制定好的任务依次执行。Mix 提供了简洁流畅的 API，让你能够为你的 Laravel 应用定义 Webpack 编译任务

### 浏览器缓存问题
    
     Laravel Mix 给出的方案是为每一次的文件修改做哈希处理。只要文件修改，哈希值就会变，提醒客户端需要重新加载文件，很巧妙地解决了我们的问题。我们只需要对 webpack.mix.js 稍作修改，即可使用此功能
     mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/app.scss', 'public/css').version();
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
     
 
