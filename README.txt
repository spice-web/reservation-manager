## ファイル構成について
B-1系 - user_input
B-2系 - admin
D -
F - register
G - master
I - pricing_management
J - 
L - marketing_support

## cssについて
scssで記述
BEM・FLOCSSでCSS設計

※※例外
is-none is-active系はu-block.scssに記述


## sassについて
gulpでコンパイルしてます。
gulpがわからなければ、「gulp sass」などで検索して下さい
gulpfile.js・package.jsonがあるので、

$ yarn install

で「node_modules」をインストールしてください
node.jsがローカルにない場合、まずnodeをインストールしてください
そして、gulpをglobalかdevにインストールしてください
インストール後に

$ gulp watch

でscssを監視できます。src/assets/style.cssに全部まとめてますが、ファイルを変更して保存すると
自動でstyle.cssにまとまられます。


## ダミー画像について
images/dummyに入れています
prefixは「dummy_」


## ナビゲーションについて
現在のページのナビに対して「--current」を付けています


## 表示・非表示について
.is-block,.is-noneで切替ができます。

## グラフのスライドについて
svg-icons.json
webslides.min.js