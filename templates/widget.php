<!--Start of Tawk.to Script (0.3.3)-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{};
<?php 
if(!is_null($customer_details)) {
	echo 'Tawk_API.visitor = '. $customer_details.';';
}
?>
var Tawk_LoadStart=new Date();
(function () {
  var s1 = document.createElement("script"),
    s0 = document.getElementsByTagName("script")[0];
  var timerId;

  s1.async = true;
  s1.src = 'https://embed.tawk.to/<?php echo $page_id ?>/<?php echo $widget_id ?>';
  s1.charset = "UTF-8";
  s1.setAttribute("crossorigin", "*");

  document.addEventListener("DOMContentLoaded", function () {
    var btn = document.querySelector(".js-tawk-btn-open");
    if (!btn) {
      s0.parentNode.insertBefore(s1, s0);
      return;
    }

    window.addEventListener("load", function () {
      timerId = setTimeout(function () {
        s0.parentNode.insertBefore(s1, s0);
      }, 3000);
    });

    btn.onclick = function () {
      if (!Tawk_API.maximize) {
        btn.disabled = true;
        clearTimeout(timerId);
        s0.parentNode.insertBefore(s1, s0);
        Tawk_API.onLoad = function () {
          btn.disabled = false;
          Tawk_API.maximize();
        };
      } else Tawk_API.toggle();
    };

    Tawk_API.onStatusChange = function (status) {
      timerId = setTimeout(function() {
        clearTimeout(timerId)
        handleStatus(status);
      }, 50);
    };
    Tawk_API.onChatMinimized = function(){
      window.cvp_lf_disable_state = true;
      setTimeout(function () {
        window.cvp_lf_disable_state = undefined;
      }, 0);
    };
    function handleStatus(status) {
      /*var status = status || Tawk_API.getStatus();
      if (status === "online") {
        btn.textContent = $_Tawk.widgetSettings.onlineGreeting.shortMessage;
        return true;
      } else if (status === "away") {
        btn.textContent = $_Tawk.widgetSettings.awayGreeting.shortMessage;
        return true;
      } else if (status === "offline") {
        btn.textContent = $_Tawk.widgetSettings.offlineForm.shortMessage;
        return true;
      } else if (!status) {
        btn.textContent = "offline";
        return false;
      }*/
    }
  });
})();
</script>


<!--End of Tawk.to Script (0.3.3)-->