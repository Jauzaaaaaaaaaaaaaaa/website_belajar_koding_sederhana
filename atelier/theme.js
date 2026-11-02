window.AT = {
  label: 'belajar.php',
  ms: 1500,
  intro: '<pre class="ed-boot"><span style="--d:0s"><b>1</b> &lt;?php</span><span style="--d:.28s"><b>2</b> echo "Mulai belajar";</span><span style="--d:.56s"><b>3</b> ?&gt;<i></i></span></pre>'
};

/* Tombol salin pada tiap contoh kode */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.code-block').forEach(function (block) {
    var b = document.createElement('button');
    b.type = 'button';
    b.className = 'ed-copy';
    b.textContent = 'salin';
    b.addEventListener('click', function () {
      if (!navigator.clipboard) return;
      navigator.clipboard.writeText(block.textContent.replace(/salin(an)?$/, '').trim()).then(function () {
        b.textContent = 'tersalin';
        setTimeout(function () { b.textContent = 'salin'; }, 1500);
      });
    });
    block.style.position = 'relative';
    block.appendChild(b);
  });
});
