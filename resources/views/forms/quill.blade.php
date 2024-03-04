<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Basic Quill Editor</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-quill-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-quill-1">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-quill" class="text-white"><code>
&#x3C;div id=&#x22;editor&#x22;&#x3E;&#x3C;/div&#x3E;

//Script

if (jQuery(&#x22;#editor&#x22;).length) {
  var quill = new Quill(&#x27;#editor&#x27;, {
  theme: &#x27;snow&#x27;
  });
}
</code></pre></kbd></div>
                        </div>
                     <div id="editor"></div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom Select</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-quill-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-quill-2">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-select-quill" class="text-white"><code>
&#x3C;div id=&#x22;content-container&#x22;&#x3E;
      &#x3C;div id=&#x22;quill-tool&#x22;&#x3E;
         &#x3C;button class=&#x22;ql-bold&#x22; data-toggle=&#x22;tooltip&#x22; data-placement=&#x22;bottom&#x22; title=&#x22;Bold&#x22;&#x3E;&#x3C;/button&#x3E;
         &#x3C;button class=&#x22;ql-underline&#x22; data-toggle=&#x22;tooltip&#x22; data-placement=&#x22;bottom&#x22; title=&#x22;Underline&#x22;&#x3E;&#x3C;/button&#x3E;
         &#x3C;button class=&#x22;ql-italic&#x22; data-toggle=&#x22;tooltip&#x22; data-placement=&#x22;bottom&#x22; title=&#x22;Add italic text &#x3C;cmd+i&#x3E;&#x22;&#x3E;&#x3C;/button&#x3E;
         &#x3C;button class=&#x22;ql-image&#x22; data-toggle=&#x22;tooltip&#x22; data-placement=&#x22;bottom&#x22; title=&#x22;Upload image&#x22;&#x3E;&#x3C;/button&#x3E;
         &#x3C;button class=&#x22;ql-code-block&#x22; data-toggle=&#x22;tooltip&#x22; data-placement=&#x22;bottom&#x22; title=&#x22;Show code&#x22;&#x3E;&#x3C;/button&#x3E;
      &#x3C;/div&#x3E;
      &#x3C;div id=&#x22;quill-toolbar&#x22;&#x3E;
         &#x3C;h1&#x3E;This is a heading text...&#x3C;/h1&#x3E;
         &#x3C;br/&#x3E;
         &#x3C;p&#x3E; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper. &#x3C;/p&#x3E;
      &#x3C;/div&#x3E;
&#x3C;/div&#x3E;

//Script

if (jQuery(&#x22;#quill-toolbar&#x22;).length) {
  var quill = new Quill(&#x27;#quill-toolbar&#x27;, {
      modules: {
        toolbar: &#x27;#quill-tool&#x27;
      },
      placeholder: &#x27;Compose an epic...&#x27;,
      theme: &#x27;snow&#x27;
  });
</code></pre></kbd></div>
                        </div>
                     <div id="content-container">
                           <div id="quill-tool">
                              <button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
                              <button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
                              <button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
                              <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button>
                              <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button>
                           </div>
                           <div id="quill-toolbar">
                              <h1>This is a heading text...</h1>
                              <br/>
                              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper. </p>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
    @section('bottom_script')
    <script src="{{ asset('js/quill.js') }}"></script>
    @endsection
</x-app-layout>
