(function(){
	var exampleHTML = [];
	exampleHTML.push(
		{
			name: '基本機能',
			list: [
				{name: '基本サンプル',path: 'index.html'},
				{name: 'ゴチャゴチャなサンプル',path: 'sandbox.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: '4.2.3からの新機能・アップデート',
			list: [
				{name: '生年月日入力補助機能',path: 'birthday.html'},
				{name: '入力内容の記憶機能',path: 'record.html'},
				{name: '確認用エレメント',path: 'confirm.html'},
				{name: 'リクエスト機能',path: 'request.html'},
				{name: 'クレジット決済機能(BPM社)',path: 'bpm.html'},
				{name: 'Googleスプレッドシート連携',path: 'google_spreadsheet.html'},
				{name: 'IPログ機能',path: 'iplogs.html'},
				{name: 'セパレータ設定サンプル',path: 'separator.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: 'カート関連機能',
			list: [
				{name: 'ショッピングカート機能サンプル',path: 'cart.html'},
				{name: 'カートに入れるためのサンプル',path: 'shopping.html'},
				{name: '料金計算機能サンプル',path: 'calc.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: '予約関連機能',
			list: [
				{name: '予約機能サンプル',path: 'reserve.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: '入力補助',
			list: [
				{name: '入力欄の分岐処理サンプル',path: 'toggle.html'},
				{name: '段階的入力機能サンプル',path: 'phase.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: 'ストレスチェック',
			list: [
				{name: 'ストレスチェック23項目サンプル',path: 'stress23.html'},
				{name: 'ストレスチェック57項目サンプル',path: 'stress57.html'}
			]
		}
	);
	exampleHTML.push(
		{
			name: '添付ファイル機能（有償）',
			list: [
				{name: '添付ファイル機能サンプル（有償）',path: 'attached.html'},
				{name: '添付ファイル機能サムネイル表示サンプル（有償）',path: 'attached_thumbnails.html'}
			]
		}
	);
	
	document.write('<div id="example_selector"><span>サンプルHTMLセレクター</span></div>');
	var select = document.createElement('select');
	select.onchange = function(){
		location.href = this.value;
	};
	var selectedIndex = 0;
	var index = 0;
	for(var i=0;i<exampleHTML.length;i++){
		var optgroup = document.createElement('optgroup');
		optgroup.label = exampleHTML[i].name;
		for(var ii=0;ii<exampleHTML[i].list.length;ii++){
			var dir = "";
			if(exampleHTML[i].list[ii].path != 'index.html' && location.href.indexOf('examples') == -1){
				dir = "examples/";
			}
			else if(exampleHTML[i].list[ii].path == 'index.html' && location.href.indexOf('examples') > -1){
				dir = "../";
			};
			var option = document.createElement('option');
			option.text = exampleHTML[i].list[ii].name + ' / ' + exampleHTML[i].list[ii].path;
			option.value = dir + exampleHTML[i].list[ii].path;
			optgroup.appendChild(option);
			if(location.href.indexOf(exampleHTML[i].list[ii].path) > -1){
				selectedIndex = index;
			};
			index++;
		};
		select.appendChild(optgroup);
	};
	select.selectedIndex = selectedIndex;
	document.getElementById('example_selector').appendChild(select);
})();