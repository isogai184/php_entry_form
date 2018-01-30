var error = $('.error_m').hide();
$(function() {
  error.hide();
});
var flag = "";

/* 名前 */
$('input[name=entry_name]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.entry_name_error_1').show();
      flag = 1;
    } else {
      $('.entry_name_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[ぁ-んァ-ヶー一-龠]+$/u))) {
      $('.entry_name_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

/* ふりがな */
$('input[name=hurigana]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.hurigana_error_1').show();
      flag = 1;
    } else {
      $('.hurigana_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[ぁ-ん]+$/u))) {
      $('.hurigana_error_2').show();
      flag = 1;
    } else {
  //    $(this).next().hide();
      $('.hurigana_error_2').hide();
      flag = 0;
    }
  });

/* 生年月日 */
$('input[name=birth_date1]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.birth_date_1_error_1').show();
      flag = 1;
    } else {
      $('.birth_date_1_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{4}+$/))) {
      $('.birth_date_1_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

$('input[name=birth_date2]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.birth_date_2_error_1').show();
      flag = 1;
    } else {
      $('.birth_date_2_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{2}+$/))) {
      $('.birth_date_2_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

$('input[name=birth_date3]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.birth_date_3_error_1').show();
      flag = 1;
    }else {
      $('.birth_date_3_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{2}+$/))) {
      $('.birth_date_3_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

/* ご住所 */
$('input[name=address]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.address_error_1').show();
      flag = 1;
    } else {
      $('.address_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match("/(?:\xEF\xBD[\xA1-\xBF]|\xEF\xBE[\x80-\x9F])|[\x20-\x7E]/"))) {
      $('address_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

/* 電話番号 */
$('input[name=tel_1]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.tel_1_error_1').show();
      flag = 1;
    } else {
      $('.tel_1_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{1,4}+$/))) {
      $('.tel_1_error_2').show();
      flag = 1;
    } else {
      $('.tel_1_error_1').hide();
      flag = 0;
    }
  });
$('input[name=tel_2]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.tel_2_error_1').show();
      flag = 1;
    } else {
      $('.tel_2_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{1,4}+$/))) {
      $('.tel_2_error_2').show();
      flag = 1;
    } else {
      $('.tel_2_error_1').hide();
      flag = 0;
    }
  });

$('input[name=tel_3]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.tel_3_error_1').show();
      flag = 1;
    } else {
      $('.tel_3_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{1,4}+$/))) {
      $('.tel_3_error_2').show();
      flag = 1;
    } else {
      $('.tel_3_error_1').hide();
      flag = 0;
    }
  });


/* メールアドレス */
$('input[name=email]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.email_error_1').show();
      flag = 1;
    } else {
      $('.email_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9a-z_.\/?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$/))) {
      $('.email_error_2').show();
      flag = 1;
    } else {
      $(this).next().hide();
      flag = 0;
    }
  });

/* 就業開始日 */
$('input[name=start_date_1]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.start_date_1_error_1').show();
      flag = 1;
    } else {
      $('.start_date_1_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{4}+$/))) {
      $('.start_date_1_error_2').show();
      flag = 1;
    } else {
      $('.start_date_1_error_1').hide();
      flag = 0;
    }
  });

$('input[name=start_date_2]').bind('focusout', function() {
  if ($(this).val() == "") {
      $('.start_date_2_error_1').show();
      flag = 1;
    } else {
      $('.start_date_2_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{2}+$/))) {
      $('.start_date_2_error_2').show();
      flag = 1;
    } else {
      $('.start_date_2_error_1').hide();
      flag = 0;
    }
  });

$('input[name=start_date_3]').bind('focusout', function() {
  if ($(this).val() === "") {
      $('.start_date_3_error_1').show();
      flag = 1;
    } else {
      $('.start_date_3_error_1').hide();
    }
  })
  .bind('focusout', function() {
    if (($(this).val() !== "") && (!$(this).val().match(/^[0-9]{2}+$/))) {
      $('.start_date_3_error_2').show();
      flag = 1;
    } else {
      $('.start_date_3_error_1').hide();
      flag = 0;
    }
  });

function check() {
  var status_JobCategory = "";
  var JobCategory = document.entry_form.getElementsByClassName('job_category');
  for (i = 0; i < 7; i++) {
    if (JobCategory[i].checked) {
      status_JobCategory = 1;
    }
  }
  if (status_JobCategory !== 1) {
    $('.job_category_error').show();
    flag = 1;
  } else {
    $('.job_category_error').hide();
    flag = 0;
  }

  var status_Employment = "";
  var Employment =document.entry_form.getElementsByClassName('employment');
  for (i = 0; i < Employment.length; i++) {
    if (Employment[i].checked) {
      status_Employment = 1;
    }
  }
  if (status_Employment !== 1) {
    $('.employment_error').show();
    flag = 1;
  } else {
    $('.employment_error').hide();
    flag = 0;
  }

  var status_Sex = "";
  var Sex =document.entry_form.getElementsByClassName('sex');
  for (i = 0; i < 2; i++) {
    if (Sex[i].checked) {
      status_Sex = 1;
    }
  }
  if (status_Sex !== 1) {
    $('.sex_error').show();
    flag = 1;
  } else {
    $('.sex_error').hide();
    flag = 0;
  }

  var status_Now = "";
  var Now =document.entry_form.getElementsByClassName('now');
  for (i = 0; i < 3; i++) {
    if (Now[i].checked) {
      status_Now = 1;
    }
  }
  if (status_Now !== 1) {
    $('.now_error').show();
    flag = 1;
  } else {
    $('.now_error').hide();
    flag = 0;
  }

  var decision = $('.error_m').css('display');
  if (decision == 'none'){
    document.entry_form.submit();
  } else {
    return false;
  }
}
