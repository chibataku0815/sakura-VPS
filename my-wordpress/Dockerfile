FROM wordpress:latest

# 必要なツール郡をインストール
RUN apt-get update
RUN apt-get -y install wget unzip

# WP プラグイン (zip) ダウンロード
WORKDIR /tmp/wp-plugins
RUN wget https://downloads.wordpress.org/plugin/contact-form-7.4.6.zip
RUN wget https://downloads.wordpress.org/plugin/syntaxhighlighter.zip
RUN wget https://downloads.wordpress.org/plugin/wp-emmet.zip
RUN wget https://downloads.wordpress.org/plugin/addquicktag.zip
RUN wget https://downloads.wordpress.org/plugin/jetpack.zip
RUN wget https://downloads.wordpress.org/plugin/search-regex.zip
RUN wget https://downloads.wordpress.org/plugin/wordpress-importer.zip
RUN wget https://downloads.wordpress.org/plugin/custom-field-template.zip
RUN wget https://downloads.wordpress.org/plugin/custom-post-type-ui.zip

# Zip ファイルを解凍してインストール
RUN unzip './*.zip' -d /usr/src/wordpress/wp-content/plugins

# 不要になった一時ファイルを削除
RUN apt-get clean

# サーバが読めるように wp-content 以下の所有者を変更
RUN chown -R www-data:www-data /usr/src/wordpress/wp-content

WORKDIR /var/www/html
