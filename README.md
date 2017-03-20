## VPSユーザー作成
useradd hogehoge
passwd sagesage
usermod -G wheel hogehoge

## 鍵認証
ローカル　→　VPS
ssh-add


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

### VPSの作業ディレクトリパーミッション

chown apache:gitusers html

### 同時プッシュ用Githubレポジストリの登録

```
git remote set-url --add origin git@git:~
```
プッシュテスト03
