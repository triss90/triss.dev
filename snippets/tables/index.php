<?php include('../../_inc/header.php'); ?>
<?php include('../../_inc/icons.php'); ?>

<style>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/gridder.css"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"]."/assets/css/snippet_tables.css"); ?>
pre:hover {
    left: 0;
    width: 100%;
}
h2 {
    font-size: 1.25rem;
}
p {
    font-size: 1rem;
}
</style>

<div class="snippets" >

    <header role="banner" class="snippets">
        <?php include('../../_inc/navigation.php'); ?>
        <div class="central center">
            <h1>Responsive Tables</h1>
            <br><br>
        </div>
    </header>

    <br><br>

    <main class="container" id="main" style="font-size:16px;">      
        <div class="row">
            <div class="tiny-12 huge-10 huge-offset-1">

                <p>The responsive HTML table adjusts its layout based on the device's screen size. It ensures readability and accessibility across devices, using CSS media queries and flexible design elements to adapt to different screens.</p>
                <table role="table">
                    <caption role="caption">
                        Employess
                    </caption>
                    <thead role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">Name</th>
                            <th role="columnheader">Position</th>
                            <th role="columnheader">Office</th>
                            <th role="columnheader">Age</th>
                            <th role="columnheader">Start date</th>
                            <th role="columnheader">Salary</th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup">
                        <tr role="row">
                            <td role="cell" data-cell="Name">Tiger Nixon</td>
                            <td role="cell" data-cell="Position">System Architect</td>
                            <td role="cell" data-cell="Office">Edinburgh</td>
                            <td role="cell" data-cell="Age">61</td>
                            <td role="cell" data-cell="Start date">2011-04-25</td>
                            <td role="cell" data-cell="Salary">$320,800</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Garrett Winters</td>
                            <td role="cell" data-cell="Position">Accountant</td>
                            <td role="cell" data-cell="Office">Tokyo</td>
                            <td role="cell" data-cell="Age">63</td>
                            <td role="cell" data-cell="Start date">2011-07-25</td>
                            <td role="cell" data-cell="Salary">$170,750</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Ashton Cox</td>
                            <td role="cell" data-cell="Position">Junior Technical Author</td>
                            <td role="cell" data-cell="Office">San Francisco</td>
                            <td role="cell" data-cell="Age">66</td>
                            <td role="cell" data-cell="Start date">2009-01-12</td>
                            <td role="cell" data-cell="Salary">$86,000</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Cedric Kelly</td>
                            <td role="cell" data-cell="Position">Senior Javascript Developer</td>
                            <td role="cell" data-cell="Office">Edinburgh</td>
                            <td role="cell" data-cell="Age">22</td>
                            <td role="cell" data-cell="Start date">2012-03-29</td>
                            <td role="cell" data-cell="Salary">$433,060</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Airi Satou</td>
                            <td role="cell" data-cell="Position">Accountant</td>
                            <td role="cell" data-cell="Office">Tokyo</td>
                            <td role="cell" data-cell="Age">33</td>
                            <td role="cell" data-cell="Start date">2008-11-28</td>
                            <td role="cell" data-cell="Salary">$162,700</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Brielle Williamson</td>
                            <td role="cell" data-cell="Position">Integration Specialist</td>
                            <td role="cell" data-cell="Office">New York</td>
                            <td role="cell" data-cell="Age">61</td>
                            <td role="cell" data-cell="Start date">2012-12-02</td>
                            <td role="cell" data-cell="Salary">$372,000</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Herrod Chandler</td>
                            <td role="cell" data-cell="Position">Sales Assistant</td>
                            <td role="cell" data-cell="Office">San Francisco</td>
                            <td role="cell" data-cell="Age">59</td>
                            <td role="cell" data-cell="Start date">2012-08-06</td>
                            <td role="cell" data-cell="Salary">$137,500</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Rhona Davidson</td>
                            <td role="cell" data-cell="Position">Integration Specialist</td>
                            <td role="cell" data-cell="Office">Tokyo</td>
                            <td role="cell" data-cell="Age">55</td>
                            <td role="cell" data-cell="Start date">2010-10-14</td>
                            <td role="cell" data-cell="Salary">$327,900</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Colleen Hurst</td>
                            <td role="cell" data-cell="Position">Javascript Developer</td>
                            <td role="cell" data-cell="Office">San Francisco</td>
                            <td role="cell" data-cell="Age">39</td>
                            <td role="cell" data-cell="Start date">2009-09-15</td>
                            <td role="cell" data-cell="Salary">$205,500</td>
                        </tr>
                        <tr role="row">
                            <td role="cell" data-cell="Name">Sonya Frost</td>
                            <td role="cell" data-cell="Position">Software Engineer</td>
                            <td role="cell" data-cell="Office">Edinburgh</td>
                            <td role="cell" data-cell="Age">23</td>
                            <td role="cell" data-cell="Start date">2008-12-13</td>
                            <td role="cell" data-cell="Salary">$103,600</td>
                        </tr>
                    </tbody>
                    <tfoot role="rowgroup">
                        <tr role="row">
                            <th role="columnheader">Name</th>
                            <th role="columnheader">Position</th>
                            <th role="columnheader">Office</th>
                            <th role="columnheader">Age</th>
                            <th role="columnheader">Start date</th>
                            <th role="columnheader">Salary</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="tiny-12 huge-10 huge-offset-1">
                <h2>Markup (HTML)</h2>
<pre><code class="language-HTML">&lt;table role=&quot;table&quot;&gt;
   
  &lt;caption role=&quot;caption&quot;&gt;Employess&lt;/caption&gt;

  &lt;thead role=&quot;rowgroup&quot;&gt;
    &lt;tr role=&quot;row&quot;&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Name&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Position&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Office&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Age&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Start date&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Salary&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;

  &lt;tbody role=&quot;rowgroup&quot;&gt;
    &lt;tr role=&quot;row&quot;&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Name&quot;&gt;Tiger Nixon&lt;/td&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Position&quot;&gt;System Architect&lt;/td&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Office&quot;&gt;Edinburgh&lt;/td&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Age&quot;&gt;61&lt;/td&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Start date&quot;&gt;2011-04-25&lt;/td&gt;
      &lt;td role=&quot;cell&quot; data-cell=&quot;Salary&quot;&gt;$320,800&lt;/td&gt;
    &lt;/tr&gt;

    [...]

  &lt;/tbody&gt;

  &lt;tfoot role=&quot;rowgroup&quot;&gt;
    &lt;tr role=&quot;row&quot;&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Name&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Position&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Office&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Age&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Start date&lt;/th&gt;
      &lt;th role=&quot;columnheader&quot;&gt;Salary&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/tfoot&gt;

&lt;/table&gt;</code></pre>

                <h2>Styles (CSS)</h2>
<pre><code class="language-CSS">table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1rem;
}

table caption,
table thead tr th,
table tbody tr td,
table tfoot tr th {
  padding: 0.5rem;
}

caption,
th {
  text-align: left;
}

caption {
  font-weight: bold;
  text-transform: uppercase;
}

tr:nth-of-type(2n) {
  /* Add alternating background color */
}

@media (max-width: 758px) {
  th {
    display: none;
  }
  td {
    display: block;
    display: grid;
    gap: 0.5rem;
    grid-template-columns: 15ch auto;
    padding: 0.5rem 1rem;
  }
  td::before {
    content: attr(data-cell) &quot;: &quot;;
    font-weight: bold;
    text-transform: capitalize;
  }
}

</code></pre>

            </div>
        </div>
    </main>

    <script src="../../../../../assets/js/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <?php include('../../_inc/footer.php'); ?>

</div>