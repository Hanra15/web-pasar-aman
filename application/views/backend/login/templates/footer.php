<!--plugins-->
<script src="assets/js/jquery.min.js"></script>
<script src="https://gkpd.pom.go.id/assets-backend/vendor/sweetalert2/dist/sweetalert2.min.js"></script>

<!--Password show & hide js -->
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("bx-hide");
                $('#show_hide_password i').removeClass("bx-show");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("bx-hide");
                $('#show_hide_password i').addClass("bx-show");
            }
        });
    });
</script>
<script>mendeleyWebImporter = {
  downloadPdfs(e,t) { return this._call('downloadPdfs', [e,t]); },
  open() { return this._call('open', []); },
  setLoginToken(e) { return this._call('setLoginToken', [e]); },
  _call(methodName, methodArgs) {
    const id = Math.random();
    window.postMessage({ id, token: '0.6603291817509702', methodName, methodArgs }, 'https://gkpd.pom.go.id');
    return new Promise(resolve => {
      const listener = window.addEventListener('message', event => {
        const data = event.data;
        if (typeof data !== 'object' || !('result' in data) || data.id !== id) return;
        window.removeEventListener('message', listener);
        resolve(data.result);
      });
    });
  }
};</script><div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge expires in two minutes" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=4rwLQsl5N_ccppoTAwwwMrEN&amp;k=6Le2SwATAAAAAGWboPB7ymSwoZt6CrXi_Ctn9HIH" name="c-bg624fdo32wb" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>
