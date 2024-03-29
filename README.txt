## ファイル構成について
B - admin
D -
F - register
G - master
I - pricing_management
J - 
L - marketing_support

## cssについて
scssで記述
BEM・FLOCSSでCSS設計

gulpfile.js・package.jsonがあるので、

$ yarn install
で「node_modules」をインストールしてください

$ gulp watch
でscssを監視できます。style.cssに全部まとめてますが、ファイルを変更して保存すると
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