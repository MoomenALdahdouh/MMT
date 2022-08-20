"use strict";var KTCreateApp=function(){var e,t,r,o,i,a,n=[];return{init:function(){(t=document.querySelector("#kt_modal_create_app"))&&(e=new bootstrap.Modal(t),(r=document.querySelector("#kt_modal_create_app_stepper"))&&(o=document.querySelector("#kt_modal_create_app_form"),i=document.querySelector('[data-kt-stepper-action="submit"]'),(a=new KTStepper(r)).on("kt.stepper.next",(function(e){console.log("stepper.next");var t=n[e.getCurrentStepIndex()-1];t?t.validate().then((function(t){console.log("validated!"),"Valid"==t?(e.goNext(),KTUtil.scrollTop()):Swal.fire({text:language === "en" ? "Sorry, looks like there are some errors detected, please try again." : "معذرة ، يبدو أنه تم اكتشاف بعض الأخطاء ، يرجى المحاولة مرة أخرى.",icon:"error",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-light"}}).then((function(){KTUtil.scrollTop()}))})):(e.goNext(),KTUtil.scrollTop())})),a.on("kt.stepper.previous",(function(e){console.log("stepper.previous"),e.goPrevious(),KTUtil.scrollTop()})),i.addEventListener("click",(function(t){t.preventDefault(),i.disabled=!0,i.setAttribute("data-kt-indicator","on"),setTimeout((function(){i.removeAttribute("data-kt-indicator"),i.disabled=!1,Swal.fire({text:language === "en" ? "Form has been successfully submitted!" : "تم تقديم النموذج بنجاح!",icon:"success",buttonsStyling:!1,confirmButtonText:language === "en" ? "Ok, got it!" : "حسنًا ، فهمت!",customClass:{confirmButton:"btn btn-primary"}}).then((function(t){t.isConfirmed&&e.hide()}))}),2e3)})),$(o.querySelector('[name="card_expiry_month"]')).on("change",(function(){n[3].revalidateField("card_expiry_month")})),$(o.querySelector('[name="card_expiry_year"]')).on("change",(function(){n[3].revalidateField("card_expiry_year")})),n.push(FormValidation.formValidation(o,{fields:{name:{validators:{notEmpty:{message:"App name is required"}}},category:{validators:{notEmpty:{message:"Category is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),n.push(FormValidation.formValidation(o,{fields:{framework:{validators:{notEmpty:{message:"Framework is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),n.push(FormValidation.formValidation(o,{fields:{dbname:{validators:{notEmpty:{message:"Database name is required"}}},dbengine:{validators:{notEmpty:{message:"Database engine is required"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}})),n.push(FormValidation.formValidation(o,{fields:{card_name:{validators:{notEmpty:{message:"Name on card is required"}}},card_number:{validators:{notEmpty:{message:"Card member is required"},creditCard:{message:"Card number is not valid"}}},card_expiry_month:{validators:{notEmpty:{message:"Month is required"}}},card_expiry_year:{validators:{notEmpty:{message:"Year is required"}}},card_cvv:{validators:{notEmpty:{message:"CVV is required"},digits:{message:"CVV must contain only digits"},stringLength:{min:3,max:4,message:"CVV must contain 3 to 4 digits only"}}}},plugins:{trigger:new FormValidation.plugins.Trigger,bootstrap:new FormValidation.plugins.Bootstrap5({rowSelector:".fv-row",eleInvalidClass:"",eleValidClass:""})}}))))}}}();KTUtil.onDOMContentLoaded((function(){KTCreateApp.init()}));
