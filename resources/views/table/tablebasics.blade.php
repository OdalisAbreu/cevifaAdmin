<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Tables</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-1">
                           <div class="card"><kbd class="bg-dark"><pre id="tables" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
&#x3C;thead&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/thead&#x3E;
&#x3C;tbody&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
      &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>The <code>.table </code> class adds basic styling to a table.</p>
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Table Head Options</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-2">
                           <div class="card"><kbd class="bg-dark"><pre id="tables-head" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead class=&#x22;thead-dark&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead class=&#x22;thead-light&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                     <table class="table">
                        <thead class="thead-dark">
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table">
                        <thead class="thead-light">
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Borderless table</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-3">
                           <div class="card"><kbd class="bg-dark"><pre id="borderless-tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-borderless&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders.</p>
                     <table class="table table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <p><code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</p>
                     <table class="table table-borderless table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Small table</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-4">
                           <div class="card"><kbd class="bg-dark"><pre id="small-tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-sm&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-sm table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                     <table class="table table-sm">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-sm table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Captions</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-5">
                           <div class="card"><kbd class="bg-dark"><pre id="captions" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
                     <table class="table">
                        
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Table Dark</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-6" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-6">
                           <div class="card"><kbd class="bg-dark"><pre id="table-dark" class="text-white"><code>
&#x3C;table class=&#x22;table table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
                     <table class="table table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Striped Rows</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-7" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-7">
                           <div class="card"><kbd class="bg-dark"><pre id="striped-rows" class="text-white"><code>
&#x3C;table class=&#x22;table table-striped&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-striped table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-striped table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Hoverable rows</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-8" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-8">
                           <div class="card"><kbd class="bg-dark"><pre id="tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-hover&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-hover table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-hover table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Contextual classes</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-9" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-9">
                           <div class="card"><kbd class="bg-dark"><pre id="contextual-classes" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Class&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr class=&#x22;table-active&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Active&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Default&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-primary&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Primary&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-secondary&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Secondary&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-success&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Success&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-danger&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Danger&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-warning&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Warning&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-info&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Info&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Use contextual classes to color table rows or individual cells.</p>
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">Class</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="table-active">
                              <th scope="row">Active</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">Default</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-primary">
                              <th scope="row">Primary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-secondary">
                              <th scope="row">Secondary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-success">
                              <th scope="row">Success</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-danger">
                              <th scope="row">Danger</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-warning">
                              <th scope="row">Warning</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-info">
                              <th scope="row">Info</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                     <p>Regular table background variants are not available with the dark table, however, you may use <a href="https://getbootstrap.com/" target="_blank">text or background utilities</a> to achieve similar styles.</p>
                     <table class="table table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="bg-primary">
                              <th scope="row">1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-success">
                              <th scope="row">3</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">4</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-info">
                              <th scope="row">5</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">6</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-warning">
                              <th scope="row">7</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">8</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-danger">
                              <th scope="row">9</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Responsive tables</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#table-10" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-10">
                           <div class="card"><kbd class="bg-dark"><pre id="responsive-tables" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
