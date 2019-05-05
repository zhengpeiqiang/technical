`微信 access_token 有两种`

基础access_token 和 网页授权access_token

其中 基础access_token 是用 公众号的appid和appsecret 去换取的
只有一步
https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=APPID&secret=APPSECRET
这个 access_token 可以去完成许多 公众号的操作

而 网页授权access_token 是通过
第一步
https://open.weixin.qq.com/connect/oauth2/authorize?
appid=APPID&redirect_uri=REDIRECT_URI&response_type=code&scope=SCOPE&state=STATE#wechat_redirect
第二步
https://api.weixin.qq.com/sns/oauth2/access_token?appid=APPID&secret=SECRET&code=CODE&grant_type=authorization_code
（这里就已经获取到access_token了）
第三步
https://api.weixin.qq.com/sns/oauth2/refresh_token?appid=APPID&grant_type=refresh_token&refresh_token=REFRESH_TOKEN
第四步
https://api.weixin.qq.com/sns/userinfo?access_token=ACCESS_TOKEN&openid=OPENID&lang=zh_CN
这里的 access_token 基本就是用来获取 用户的信息的
