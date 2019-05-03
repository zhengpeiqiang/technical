# cmd指令集

<ul>
  <li>
    新建文件夹<br>(md/mkdir) ** 
  </li>
  <li>
    删除文件夹<br>(rd/rmdir) ** <br>
    如果删除的文件夹非空<br>(rd/rmdir) /s ** 
  </li>
  <li>
    新建空文件<br>type nul>** <br>
    新建非空文件<br>echo (文件内容)>**
  </li>
  <li>
    删除文件<br>del **
  </li>
  <li>
    变换字体颜色<br>color num
  </li>
  <li>
    获取本地IP信息<br>ipconfig
  </li>
  <li>
    ping 域名<br>ping **.**.***
  </li>
  <li>
    设置环境变量<br>
    set             => 获取所有环境变量<br>
    set **=**       => 设置变量名**的值为**<br>
    set **=         => 清空变量名**的值<br>
    set AA=%AA%;**  => 追加**到AA里面
  </li>
</ul>
ASSOC          显示或修改文件扩展名关联。<br>
ATTRIB         显示或更改文件属性。<br>
BREAK          设置或清除扩展式 CTRL+C 检查。<br>
BCDEDIT        设置启动数据库中的属性以控制启动加载。<br>
CACLS          显示或修改文件的访问控制列表(ACL)。<br>
CALL           从另一个批处理程序调用这一个。<br>
CD             显示当前目录的名称或将其更改。<br>
CHCP           显示或设置活动代码页数。<br>
CHDIR          显示当前目录的名称或将其更改。<br>
CHKDSK         检查磁盘并显示状态报告。<br>
CHKNTFS        显示或修改启动时间磁盘检查。<br>
CLS            清除屏幕。<br>
CMD            打开另一个 Windows 命令解释程序窗口。<br>
COLOR          设置默认控制台前景和背景颜色。<br>
COMP           比较两个或两套文件的内容。<br>
COMPACT        显示或更改 NTFS 分区上文件的压缩。<br>
CONVERT        将 FAT 卷转换成 NTFS。你不能转换
               当前驱动器。<br>
COPY           将至少一个文件复制到另一个位置。<br>
DATE           显示或设置日期。<br>
DEL            删除至少一个文件。<br>
DIR            显示一个目录中的文件和子目录。<br>
DISKPART       显示或配置磁盘分区属性。<br>
DOSKEY         编辑命令行、撤回 Windows 命令并
               创建宏。<br>
DRIVERQUERY    显示当前设备驱动程序状态和属性。<br>
ECHO           显示消息，或将命令回显打开或关闭。<br>
ENDLOCAL       结束批文件中环境更改的本地化。<br>
ERASE          删除一个或多个文件。<br>
EXIT           退出 CMD.EXE 程序(命令解释程序)。<br>
FC             比较两个文件或两个文件集并显示
               它们之间的不同。<br>
FIND           在一个或多个文件中搜索一个文本字符串。<br>
FINDSTR        在多个文件中搜索字符串。<br>
FOR            为一组文件中的每个文件运行一个指定的命令。<br>
FORMAT         格式化磁盘，以便用于 Windows。<br>
FSUTIL         显示或配置文件系统属性。<br>
FTYPE          显示或修改在文件扩展名关联中使用的文件
               类型。<br>
GOTO           将 Windows 命令解释程序定向到批处理程序
               中某个带标签的行。<br>
GPRESULT       显示计算机或用户的组策略信息。<br>
GRAFTABL       使 Windows 在图形模式下显示扩展
               字符集。<br>
HELP           提供 Windows 命令的帮助信息。<br>
ICACLS         显示、修改、备份或还原文件和
               目录的 ACL。<br>
IF             在批处理程序中执行有条件的处理操作。<br>
LABEL          创建、更改或删除磁盘的卷标。<br>
MD             创建一个目录。<br>
MKDIR          创建一个目录。<br>
MKLINK         创建符号链接和硬链接<br>
MODE           配置系统设备。<br>
MORE           逐屏显示输出。<br>
MOVE           将一个或多个文件从一个目录移动到另一个
               目录。<br>
OPENFILES      显示远程用户为了文件共享而打开的文件。<br>
PATH           为可执行文件显示或设置搜索路径。<br>
PAUSE          暂停批处理文件的处理并显示消息。<br>
POPD           还原通过 PUSHD 保存的当前目录的上一个
               值。<br>
PRINT          打印一个文本文件。<br>
PROMPT         更改 Windows 命令提示。<br>
PUSHD          保存当前目录，然后对其进行更改。<br>
RD             删除目录。<br>
RECOVER        从损坏的或有缺陷的磁盘中恢复可读信息。<br>
REM            记录批处理文件或 CONFIG.SYS 中的注释(批注)。<br>
REN            重命名文件。<br>
RENAME         重命名文件。<br>
REPLACE        替换文件。<br>
RMDIR          删除目录。<br>
ROBOCOPY       复制文件和目录树的高级实用工具<br>
SET            显示、设置或删除 Windows 环境变量。<br>
SETLOCAL       开始本地化批处理文件中的环境更改。<br>
SC             显示或配置服务(后台进程)。<br>
SCHTASKS       安排在一台计算机上运行命令和程序。<br>
SHIFT          调整批处理文件中可替换参数的位置。<br>
SHUTDOWN       允许通过本地或远程方式正确关闭计算机。<br>
SORT           对输入排序。<br>
START          启动单独的窗口以运行指定的程序或命令。<br>
SUBST          将路径与驱动器号关联。<br>
SYSTEMINFO     显示计算机的特定属性和配置。<br>
TASKLIST       显示包括服务在内的所有当前运行的任务。<br>
TASKKILL       中止或停止正在运行的进程或应用程序。<br>
TIME           显示或设置系统时间。<br>
TITLE          设置 CMD.EXE 会话的窗口标题。<br>
TREE           以图形方式显示驱动程序或路径的目录
               结构。<br>
TYPE           显示文本文件的内容。<br>
VER            显示 Windows 的版本。<br>
VERIFY         告诉 Windows 是否进行验证，以确保文件
               正确写入磁盘。<br>
VOL            显示磁盘卷标和序列号。<br>
XCOPY          复制文件和目录树。<br>
WMIC           在交互式命令 shell 中显示 WMI 信息。<br>
