$(function(){
	PERFORMANCE_MAIL = "出演媒体：\n（例 テレビ、ラジオ、ライブ、イベント、雑誌、その他） \n\n日時： \n\n場所： \n\n具体的な内容： \n\n貴社名： \n\nご担当者様連絡先：";
	var contactType = $("input[name='お問い合わせ内容']:checked").val();
	console.log(contactType);
	//お問合わせ内容の初期設定
	if(contactType == '出演依頼に関するお問い合わせ'){
		$("#textarea").val(PERFORMANCE_MAIL);
	}else{
		$("#textarea").val("");
	}

	//お問合せ内容の変更時のイベント
	$("input[name='お問い合わせ内容']:radio").change(function(){
		contactType = $("input[name='お問い合わせ内容']:checked").val();
		if(contactType == '出演依頼に関するお問い合わせ'){
			$("#textarea").val(PERFORMANCE_MAIL);
		}else{
			$("#textarea").val("");
		}
	});

});