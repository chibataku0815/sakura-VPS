## git 共用リポジトリ作成

```
# groupadd gitusers
# gpasswd -a user1 gitusers
# gpasswd -a user2 gitusers
```

```
# mkdir -p /var/git/hoge.git
# cd /var/git/hoge.git
# chmod 2775 .
# chgrp gitusers .
# git --bare init --shared
# touch gitweb-export-ok               # if you want to publish this repository with gitweb
# touch git-daemon-export-ok           # if you want to publish this repository with git-daemon
# echo "Description of this repo" > description
```

同時プッシュ用Githubレポジストリの登録

```
git remote set-url --add origin git@git:~
```
sourcetree push test06
