### GIT 相关操作

    git init                                                           初始化项目
    git add .                                                          添加项目文件
    git commit -m "xxx"                                                提交文件到暂存区
    git remote add origin git@github.com:docas-pk/hello_laravel.git    指定远程仓库
    git push -u origin master                                          本地分支绑定远端分支，并将代码提交到远端分支
    git log                                                            查看提交日志
    git branch -vv                                                     查看所有的分支情况
    git checkout -f                                                    使用远端分支覆盖暂存区和本地的修改