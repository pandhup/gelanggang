@extends('layouts.gentelella')

@section('content')
  
  <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Responsive example<small>Users</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
                    </p>

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>First name</th>
                          <th>Last name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                          <th>Extn.</th>
                          <th>E-mail</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Tiger</td>
                          <td>Nixon</td>
                          <td>System Architect</td>
                          <td>Edinburgh</td>
                          <td>61</td>
                          <td>2011/04/25</td>
                          <td>$320,800</td>
                          <td>5421</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f88cd69691809796b89c998c998c999a949d8bd6969d8c">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Garrett</td>
                          <td>Winters</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>63</td>
                          <td>2011/07/25</td>
                          <td>$170,750</td>
                          <td>8422</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a1d540d13140e1f08093a1e1b0e1b0e1b18161f0954141f0e">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Ashton</td>
                          <td>Cox</td>
                          <td>Junior Technical Author</td>
                          <td>San Francisco</td>
                          <td>66</td>
                          <td>2009/01/12</td>
                          <td>$86,000</td>
                          <td>1562</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17763974786f57737663766376757b726439797263">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Cedric</td>
                          <td>Kelly</td>
                          <td>Senior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2012/03/29</td>
                          <td>$433,060</td>
                          <td>6224</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f6bbfef0f9f9ecd5f1f4e1f4e1f4f7f9f0e6bbfbf0e1">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Airi</td>
                          <td>Satou</td>
                          <td>Accountant</td>
                          <td>Tokyo</td>
                          <td>33</td>
                          <td>2008/11/28</td>
                          <td>$162,700</td>
                          <td>5407</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4829663b293c273d082c293c293c292a242d3b66262d3c">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Brielle</td>
                          <td>Williamson</td>
                          <td>Integration Specialist</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2012/12/02</td>
                          <td>$372,000</td>
                          <td>4804</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5a7ebb2aca9a9aca4a8b6aaab85a1a4b1a4b1a4a7a9a0b6ebaba0b1">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Herrod</td>
                          <td>Chandler</td>
                          <td>Sales Assistant</td>
                          <td>San Francisco</td>
                          <td>59</td>
                          <td>2012/08/06</td>
                          <td>$137,500</td>
                          <td>9608</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ef6b0fdf6fff0faf2fbecdefaffeaffeafffcf2fbedb0f0fbea">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Rhona</td>
                          <td>Davidson</td>
                          <td>Integration Specialist</td>
                          <td>Tokyo</td>
                          <td>55</td>
                          <td>2010/10/14</td>
                          <td>$327,900</td>
                          <td>6200</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c2e72383d2a35382f33321c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Colleen</td>
                          <td>Hurst</td>
                          <td>Javascript Developer</td>
                          <td>San Francisco</td>
                          <td>39</td>
                          <td>2009/09/15</td>
                          <td>$205,500</td>
                          <td>2360</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9ca87c1dcdbdadde9cdc8ddc8ddc8cbc5ccda87c7ccdd">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Sonya</td>
                          <td>Frost</td>
                          <td>Software Engineer</td>
                          <td>Edinburgh</td>
                          <td>23</td>
                          <td>2008/12/13</td>
                          <td>$103,600</td>
                          <td>1667</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9bae7afbba6babd89ada8bda8bda8aba5acbae7a7acbd">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jena</td>
                          <td>Gaines</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>30</td>
                          <td>2008/12/19</td>
                          <td>$90,560</td>
                          <td>3814</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="660c4801070f08031526020712071207040a031548080312">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Quinn</td>
                          <td>Flynn</td>
                          <td>Support Lead</td>
                          <td>Edinburgh</td>
                          <td>22</td>
                          <td>2013/03/03</td>
                          <td>$342,000</td>
                          <td>9497</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6e1f4008021700002e0a0f1a0f1a0f0c020b1d40000b1a">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Charde</td>
                          <td>Marshall</td>
                          <td>Regional Director</td>
                          <td>San Francisco</td>
                          <td>36</td>
                          <td>2008/10/16</td>
                          <td>$470,600</td>
                          <td>6741</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f497da999586879c959898b490958095809596989187da9a9180">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Haley</td>
                          <td>Kennedy</td>
                          <td>Senior Marketing Designer</td>
                          <td>London</td>
                          <td>43</td>
                          <td>2012/12/18</td>
                          <td>$313,500</td>
                          <td>3597</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a1254111f14141f1e033a1e1b0e1b0e1b18161f0954141f0e">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Tatyana</td>
                          <td>Fitzpatrick</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>19</td>
                          <td>2010/03/17</td>
                          <td>$385,750</td>
                          <td>1965</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="364218505f424c465742445f555d76525742574257545a534518585342">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Michael</td>
                          <td>Silva</td>
                          <td>Marketing Designer</td>
                          <td>London</td>
                          <td>66</td>
                          <td>2012/11/27</td>
                          <td>$198,500</td>
                          <td>1581</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="94f9bae7fdf8e2f5d4f0f5e0f5e0f5f6f8f1e7bafaf1e0">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Paul</td>
                          <td>Byrd</td>
                          <td>Chief Financial Officer (CFO)</td>
                          <td>New York</td>
                          <td>64</td>
                          <td>2010/06/09</td>
                          <td>$725,000</td>
                          <td>3059</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3d4d135f444f597d595c495c495c5f51584e13535849">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Gloria</td>
                          <td>Little</td>
                          <td>Systems Administrator</td>
                          <td>New York</td>
                          <td>59</td>
                          <td>2009/04/10</td>
                          <td>$237,500</td>
                          <td>1721</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63044d0f0a17170f0623070217021702010f06104d0d0617">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Bradley</td>
                          <td>Greer</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>41</td>
                          <td>2012/10/13</td>
                          <td>$132,000</td>
                          <td>2558</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6d0f430a1f08081f2d090c190c190c0f01081e43030819">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Dai</td>
                          <td>Rios</td>
                          <td>Personnel Lead</td>
                          <td>Edinburgh</td>
                          <td>35</td>
                          <td>2012/09/26</td>
                          <td>$217,500</td>
                          <td>2290</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53377d213a3c2013373227322732313f36207d3d3627">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jenette</td>
                          <td>Caldwell</td>
                          <td>Development Lead</td>
                          <td>New York</td>
                          <td>30</td>
                          <td>2011/09/03</td>
                          <td>$345,000</td>
                          <td>1937</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc96d29f9d90988b999090bc989d889d889d9e90998fd2929988">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Yuri</td>
                          <td>Berry</td>
                          <td>Chief Marketing Officer (CMO)</td>
                          <td>New York</td>
                          <td>40</td>
                          <td>2009/06/25</td>
                          <td>$675,000</td>
                          <td>6154</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a3da8dc1c6d1d1dae3c7c2d7c2d7c2c1cfc6d08dcdc6d7">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Caesar</td>
                          <td>Vance</td>
                          <td>Pre-Sales Support</td>
                          <td>New York</td>
                          <td>21</td>
                          <td>2011/12/12</td>
                          <td>$106,450</td>
                          <td>8330</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4d00584f404d4b6e4a4f5a4f5a4f4c424b5d00404b5a">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Doris</td>
                          <td>Wilder</td>
                          <td>Sales Assistant</td>
                          <td>Sidney</td>
                          <td>23</td>
                          <td>2010/09/20</td>
                          <td>$85,600</td>
                          <td>3023</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f591db829c99919087b591948194819497999086db9b9081">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Angelica</td>
                          <td>Ramos</td>
                          <td>Chief Executive Officer (CEO)</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2009/10/09</td>
                          <td>$1,200,000</td>
                          <td>5797</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dabbf4a8bbb7b5a99abebbaebbaebbb8b6bfa9f4b4bfae">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Gavin</td>
                          <td>Joyce</td>
                          <td>Developer</td>
                          <td>Edinburgh</td>
                          <td>42</td>
                          <td>2010/12/22</td>
                          <td>$92,575</td>
                          <td>8822</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cbace5a1a4b2a8ae8bafaabfaabfaaa9a7aeb8e5a5aebf">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jennifer</td>
                          <td>Chang</td>
                          <td>Regional Director</td>
                          <td>Singapore</td>
                          <td>28</td>
                          <td>2010/11/14</td>
                          <td>$357,650</td>
                          <td>9239</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3d99dd0dbd2ddd4f3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Brenden</td>
                          <td>Wagner</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>28</td>
                          <td>2011/06/07</td>
                          <td>$206,850</td>
                          <td>1314</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="492b673e282e272c3b092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Fiona</td>
                          <td>Green</td>
                          <td>Chief Operating Officer (COO)</td>
                          <td>San Francisco</td>
                          <td>48</td>
                          <td>2010/03/11</td>
                          <td>$850,000</td>
                          <td>2947</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c2a4eca5b0a7a7ac82a6a3b6a3b6a3a0aea7b1ecaca7b6">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Shou</td>
                          <td>Itou</td>
                          <td>Regional Marketing</td>
                          <td>Tokyo</td>
                          <td>20</td>
                          <td>2011/08/14</td>
                          <td>$163,000</td>
                          <td>8899</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e291cc8b968d97a2868396839683808e8791cc8c8796">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Michelle</td>
                          <td>House</td>
                          <td>Integration Specialist</td>
                          <td>Sidney</td>
                          <td>37</td>
                          <td>2011/06/02</td>
                          <td>$95,400</td>
                          <td>2769</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0adeea8afb5b3a580a4a1b4a1b4a1a2aca5b3eeaea5b4">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Suki</td>
                          <td>Burks</td>
                          <td>Developer</td>
                          <td>London</td>
                          <td>53</td>
                          <td>2009/10/22</td>
                          <td>$114,500</td>
                          <td>6832</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bac994d8cfc8d1c9fadedbcedbcedbd8d6dfc994d4dfce">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Prescott</td>
                          <td>Bartlett</td>
                          <td>Technical Author</td>
                          <td>London</td>
                          <td>27</td>
                          <td>2011/05/07</td>
                          <td>$145,000</td>
                          <td>3606</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5c2c723e3d2e28303928281c383d283d283d3e30392f72323928">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Gavin</td>
                          <td>Cortez</td>
                          <td>Team Leader</td>
                          <td>San Francisco</td>
                          <td>22</td>
                          <td>2008/10/26</td>
                          <td>$235,500</td>
                          <td>2860</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7b0f9b4b8a5a3b2ad97b3b6a3b6a3b6b5bbb2a4f9b9b2a3">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Martena</td>
                          <td>Mccray</td>
                          <td>Post-Sales support</td>
                          <td>Edinburgh</td>
                          <td>46</td>
                          <td>2011/03/09</td>
                          <td>$324,050</td>
                          <td>8240</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4f2261222c2c3d2e360f2b2e3b2e3b2e2d232a3c61212a3b">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Unity</td>
                          <td>Butler</td>
                          <td>Marketing Designer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/12/09</td>
                          <td>$85,675</td>
                          <td>5384</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4d18ac6d1d0c8c1d6e4c0c5d0c5d0c5c6c8c1d78acac1d0">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Howard</td>
                          <td>Hatfield</td>
                          <td>Office Manager</td>
                          <td>San Francisco</td>
                          <td>51</td>
                          <td>2008/12/16</td>
                          <td>$164,500</td>
                          <td>7031</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf4b2f4fde8faf5f9f0f8dcf8fde8fde8fdfef0f9efb2f2f9e8">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Hope</td>
                          <td>Fuentes</td>
                          <td>Secretary</td>
                          <td>San Francisco</td>
                          <td>41</td>
                          <td>2010/02/12</td>
                          <td>$109,850</td>
                          <td>6318</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ee86c0889b8b809a8b9dae8a8f9a8f9a8f8c828b9dc0808b9a">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Vivian</td>
                          <td>Harrell</td>
                          <td>Financial Controller</td>
                          <td>San Francisco</td>
                          <td>62</td>
                          <td>2009/02/14</td>
                          <td>$452,500</td>
                          <td>9422</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="01772f69607373646d6d41656075607560636d64722f6f6475">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Timothy</td>
                          <td>Mooney</td>
                          <td>Office Manager</td>
                          <td>London</td>
                          <td>37</td>
                          <td>2008/12/11</td>
                          <td>$136,200</td>
                          <td>7580</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="45316b282a2a2b203c05212431243124272920366b2b2031">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jackson</td>
                          <td>Bradshaw</td>
                          <td>Director</td>
                          <td>New York</td>
                          <td>65</td>
                          <td>2008/09/26</td>
                          <td>$645,750</td>
                          <td>1042</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7dd99d5c5d6d3c4dfd6c0f7d3d6c3d6c3d6d5dbd2c499d9d2c3">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Olivia</td>
                          <td>Liang</td>
                          <td>Support Engineer</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2011/02/03</td>
                          <td>$234,500</td>
                          <td>2120</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6708490b0e06090027030613061306050b021449090213">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Bruno</td>
                          <td>Nash</td>
                          <td>Software Engineer</td>
                          <td>London</td>
                          <td>38</td>
                          <td>2011/05/03</td>
                          <td>$163,500</td>
                          <td>6222</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3d19dddd2c0dbf3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Sakura</td>
                          <td>Yamamoto</td>
                          <td>Support Engineer</td>
                          <td>Tokyo</td>
                          <td>37</td>
                          <td>2009/08/19</td>
                          <td>$139,575</td>
                          <td>9383</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="abd885d2cac6cac6c4dfc4ebcfcadfcadfcac9c7ced885c5cedf">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Thor</td>
                          <td>Walton</td>
                          <td>Developer</td>
                          <td>New York</td>
                          <td>61</td>
                          <td>2013/08/11</td>
                          <td>$98,540</td>
                          <td>8327</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e195cf96808d958e8fa1858095809580838d8492cf8f8495">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Finn</td>
                          <td>Camacho</td>
                          <td>Support Engineer</td>
                          <td>San Francisco</td>
                          <td>47</td>
                          <td>2009/07/07</td>
                          <td>$87,500</td>
                          <td>2927</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea8cc4898b878b898285aa8e8b9e8b9e8b88868f99c4848f9e">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Serge</td>
                          <td>Baldwin</td>
                          <td>Data Coordinator</td>
                          <td>Singapore</td>
                          <td>64</td>
                          <td>2012/04/09</td>
                          <td>$138,575</td>
                          <td>8352</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="40336e22212c2437292e00242134213421222c25336e2e2534">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Zenaida</td>
                          <td>Frank</td>
                          <td>Software Engineer</td>
                          <td>New York</td>
                          <td>63</td>
                          <td>2010/01/04</td>
                          <td>$125,250</td>
                          <td>7439</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1f6531796d7e71745f7b7e6b7e6b7e7d737a6c31717a6b">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Zorita</td>
                          <td>Serrano</td>
                          <td>Software Engineer</td>
                          <td>San Francisco</td>
                          <td>56</td>
                          <td>2012/06/01</td>
                          <td>$115,000</td>
                          <td>4389</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d37633e283f3f2c23220d292c392c392c2f21283e63232839">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jennifer</td>
                          <td>Acosta</td>
                          <td>Junior Javascript Developer</td>
                          <td>Edinburgh</td>
                          <td>43</td>
                          <td>2013/02/01</td>
                          <td>$75,650</td>
                          <td>3431</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc783cccec2ded9ccedc9ccd9ccd9cccfc1c8de83c3c8d9">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Cara</td>
                          <td>Stevens</td>
                          <td>Sales Assistant</td>
                          <td>New York</td>
                          <td>46</td>
                          <td>2011/12/06</td>
                          <td>$145,600</td>
                          <td>3990</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="72115c01061704171c0132161306130613101e17015c1c1706">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Hermione</td>
                          <td>Butler</td>
                          <td>Regional Director</td>
                          <td>London</td>
                          <td>47</td>
                          <td>2011/03/21</td>
                          <td>$356,250</td>
                          <td>1016</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4921672b3c3d252c3b092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Lael</td>
                          <td>Greer</td>
                          <td>Systems Administrator</td>
                          <td>London</td>
                          <td>21</td>
                          <td>2009/02/27</td>
                          <td>$103,500</td>
                          <td>6733</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="503c7e372235352210343124312431323c35237e3e3524">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Jonas</td>
                          <td>Alexander</td>
                          <td>Developer</td>
                          <td>San Francisco</td>
                          <td>30</td>
                          <td>2010/07/14</td>
                          <td>$86,500</td>
                          <td>8196</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0ca8ec1ccc5d8c1cec4c5d2e0c4c1d4c1d4c1c2ccc5d38ecec5d4">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Shad</td>
                          <td>Decker</td>
                          <td>Regional Director</td>
                          <td>Edinburgh</td>
                          <td>51</td>
                          <td>2008/11/13</td>
                          <td>$183,000</td>
                          <td>6373</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3e4d105a5b5d555b4c7e5a5f4a5f4a5f5c525b4d10505b4a">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Michael</td>
                          <td>Bruce</td>
                          <td>Javascript Developer</td>
                          <td>Singapore</td>
                          <td>29</td>
                          <td>2011/06/27</td>
                          <td>$183,000</td>
                          <td>5384</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2b460549595e484e6b4f4a5f4a5f4a49474e5805454e5f">[email&#160;protected]</a></td>
                        </tr>
                        <tr>
                          <td>Donna</td>
                          <td>Snider</td>
                          <td>Customer Support</td>
                          <td>New York</td>
                          <td>27</td>
                          <td>2011/01/25</td>
                          <td>$112,000</td>
                          <td>4226</td>
                          <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c08421f020508091e2c080d180d180d0e00091f42020918">[email&#160;protected]</a></td>
                        </tr>
                      </tbody>
                    </table>


                  </div>
                </div>

@endsection
