<!DOCTYPE html>
<html>

<head>
  <title>UTS UUS SURAHMAN - Data Produk</title>
  <style>
    table,
    th,
    td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 4px;
    }
  </style>
</head>

<body>

  <h2>DATA PRODUK</h2>

  <label for="kat">Cari Berdasarkan: </label>
  <select id="kat">
    <option value=""> -- Pilih -- </option>
    <option value="1">ID Produk</option>
    <option value="2">Nama Produk</option>
    <option value="3">Nama Supplier</option>
    <option value="4">Kategori</option>
    <option value="5">Harga</option>
  </select>
  <input type="text" id="cari" size="20" placeholder="Masukkan kata kunci...">
  <button onclick="searchTable()">OK</button>

  <br><br>

  <table id="produkTable" width="100%">
    <thead>
      <tr bgcolor="grey">
        <th>No</th>
        <th>Product ID</th>
        <th>Nama Produk</th>
        <th>Nama Supplier</th>
        <th>Kategori</th>
        <th>Unit</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <!-- Data produk disalin dari HTML asli -->
      <tr>
        <td align="center">1</td>
        <td align="center">1</td>
        <td>Chais</td>
        <td>Exotic Liquid</td>
        <td>Beverages</td>
        <td>10 boxes x 20 bags</td>
        <td>$18</td>
      </tr>
      <tr>
        <td align="center">2</td>
        <td align="center">2</td>
        <td>Chang</td>
        <td>Exotic Liquid</td>
        <td>Beverages</td>
        <td>24 - 12 oz bottles</td>
        <td>$19</td>
      </tr>
      <tr>
        <td align="center">3</td>
        <td align="center">24</td>
        <td>Guaran� Fant�stica</td>
        <td>Refrescos Americanas LTDA</td>
        <td>Beverages</td>
        <td>12 - 355 ml cans</td>
        <td>$5</td>
      </tr>
      <tr>
        <td align="center">4</td>
        <td align="center">34</td>
        <td>Sasquatch Ale</td>
        <td>Bigfoot Breweries</td>
        <td>Beverages</td>
        <td>24 - 12 oz bottles</td>
        <td>$14</td>
      </tr>
      <tr>
        <td align="center">5</td>
        <td align="center">35</td>
        <td>Steeleye Stout</td>
        <td>Bigfoot Breweries</td>
        <td>Beverages</td>
        <td>24 - 12 oz bottles</td>
        <td>$18</td>
      </tr>
      <tr>
        <td align="center">6</td>
        <td align="center">38</td>
        <td>C�te de Blaye</td>
        <td>Aux joyeux eccl�siastiques</td>
        <td>Beverages</td>
        <td>12 - 75 cl bottles</td>
        <td>$264</td>
      </tr>
      <tr>
        <td align="center">7</td>
        <td align="center">39</td>
        <td>Chartreuse verte</td>
        <td>Aux joyeux eccl�siastiques</td>
        <td>Beverages</td>
        <td>750 cc per bottle</td>
        <td>$18</td>
      </tr>
      <tr>
        <td align="center">8</td>
        <td align="center">43</td>
        <td>Ipoh Coffee</td>
        <td>Leka Trading</td>
        <td>Beverages</td>
        <td>16 - 500 g tins</td>
        <td>$46</td>
      </tr>
      <tr>
        <td align="center">9</td>
        <td align="center">67</td>
        <td>Laughing Lumberjack Lager</td>
        <td>Bigfoot Breweries</td>
        <td>Beverages</td>
        <td>24 - 12 oz bottles</td>
        <td>$14</td>
      </tr>
      <tr>
        <td align="center">10</td>
        <td align="center">70</td>
        <td>Outback Lager</td>
        <td>Pavlova, Ltd.</td>
        <td>Beverages</td>
        <td>24 - 355 ml bottles</td>
        <td>$15</td>
      </tr>
      <tr>
        <td align="center">11</td>
        <td align="center">75</td>
        <td>Rh�nbr�u Klosterbier</td>
        <td>Plutzer Lebensmittelgro�m�rkte AG</td>
        <td>Beverages</td>
        <td>24 - 0.5 l bottles</td>
        <td>$8</td>
      </tr>
      <tr>
        <td align="center">12</td>
        <td align="center">76</td>
        <td>Lakkalik��ri</td>
        <td>Karkki Oy</td>
        <td>Beverages</td>
        <td>500 ml</td>
        <td>$18</td>
      </tr>
      <tr>
        <td align="center">13</td>
        <td align="center">3</td>
        <td>Aniseed Syrup</td>
        <td>Exotic Liquid</td>
        <td>Condiments</td>
        <td>12 - 550 ml bottles</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">14</td>
        <td align="center">4</td>
        <td>Chef Antons Cajun Seasoning</td>
        <td>New Orleans Cajun Delights</td>
        <td>Condiments</td>
        <td>48 - 6 oz jars</td>
        <td>$22</td>
      </tr>
      <tr>
        <td align="center">15</td>
        <td align="center">5</td>
        <td>Chef Antons Gumbo Mix</td>
        <td>New Orleans Cajun Delights</td>
        <td>Condiments</td>
        <td>36 boxes</td>
        <td>$21</td>
      </tr>
      <tr>
        <td align="center">16</td>
        <td align="center">6</td>
        <td>Grandmas Boysenberry Spread</td>
        <td>Grandma Kellys Homestead</td>
        <td>Condiments</td>
        <td>12 - 8 oz jars</td>
        <td>$25</td>
      </tr>
      <tr>
        <td align="center">17</td>
        <td align="center">8</td>
        <td>Northwoods Cranberry Sauce</td>
        <td>Grandma Kellys Homestead</td>
        <td>Condiments</td>
        <td>12 - 12 oz jars</td>
        <td>$40</td>
      </tr>
      <tr>
        <td align="center">18</td>
        <td align="center">15</td>
        <td>Genen Shouyu</td>
        <td>Mayumis</td>
        <td>Condiments</td>
        <td>24 - 250 ml bottles</td>
        <td>$16</td>
      </tr>
      <tr>
        <td align="center">19</td>
        <td align="center">44</td>
        <td>Gula Malacca</td>
        <td>Leka Trading</td>
        <td>Condiments</td>
        <td>20 - 2 kg bags</td>
        <td>$19</td>
      </tr>
      <tr>
        <td align="center">20</td>
        <td align="center">61</td>
        <td>Sirop d�rable</td>
        <td>For�ts d�rables</td>
        <td>Condiments</td>
        <td>24 - 500 ml bottles</td>
        <td>$29</td>
      </tr>
      <tr>
        <td align="center">21</td>
        <td align="center">63</td>
        <td>Vegie-spread</td>
        <td>Pavlova, Ltd.</td>
        <td>Condiments</td>
        <td>15 - 625 g jars</td>
        <td>$44</td>
      </tr>
      <tr>
        <td align="center">22</td>
        <td align="center">65</td>
        <td>Louisiana Fiery Hot Pepper Sauce</td>
        <td>New Orleans Cajun Delights</td>
        <td>Condiments</td>
        <td>32 - 8 oz bottles</td>
        <td>$21</td>
      </tr>
      <tr>
        <td align="center">23</td>
        <td align="center">66</td>
        <td>Louisiana Hot Spiced Okra</td>
        <td>New Orleans Cajun Delights</td>
        <td>Condiments</td>
        <td>24 - 8 oz jars</td>
        <td>$17</td>
      </tr>
      <tr>
        <td align="center">24</td>
        <td align="center">77</td>
        <td>Original Frankfurter gr�ne So�e</td>
        <td>Plutzer Lebensmittelgro�m�rkte AG</td>
        <td>Condiments</td>
        <td>12 boxes</td>
        <td>$13</td>
      </tr>
      <tr>
        <td align="center">25</td>
        <td align="center">16</td>
        <td>Pavlova</td>
        <td>Pavlova, Ltd.</td>
        <td>Confections</td>
        <td>32 - 500 g boxes</td>
        <td>$17</td>
      </tr>
      <tr>
        <td align="center">26</td>
        <td align="center">19</td>
        <td>Teatime Chocolate Biscuits</td>
        <td>Specialty Biscuits, Ltd.</td>
        <td>Confections</td>
        <td>10 boxes x 12 pieces</td>
        <td>$9</td>
      </tr>
      <tr>
        <td align="center">27</td>
        <td align="center">20</td>
        <td>Sir Rodneys Marmalade</td>
        <td>Specialty Biscuits, Ltd.</td>
        <td>Confections</td>
        <td>30 gift boxes</td>
        <td>$81</td>
      </tr>
      <tr>
        <td align="center">28</td>
        <td align="center">21</td>
        <td>Sir Rodneys Scones</td>
        <td>Specialty Biscuits, Ltd.</td>
        <td>Confections</td>
        <td>24 pkgs. x 4 pieces</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">29</td>
        <td align="center">25</td>
        <td>NuNuCa Nu�-Nougat-Creme</td>
        <td>Heli S��waren GmbH &amp; Co. KG</td>
        <td>Confections</td>
        <td>20 - 450 g glasses</td>
        <td>$14</td>
      </tr>
      <tr>
        <td align="center">30</td>
        <td align="center">26</td>
        <td>Gumb�r Gummib�rchen</td>
        <td>Heli S��waren GmbH &amp; Co. KG</td>
        <td>Confections</td>
        <td>100 - 250 g bags</td>
        <td>$31</td>
      </tr>
      <tr>
        <td align="center">31</td>
        <td align="center">27</td>
        <td>Schoggi Schokolade</td>
        <td>Heli S��waren GmbH &amp; Co. KG</td>
        <td>Confections</td>
        <td>100 - 100 g pieces</td>
        <td>$44</td>
      </tr>
      <tr>
        <td align="center">32</td>
        <td align="center">47</td>
        <td>Zaanse koeken</td>
        <td>Zaanse Snoepfabriek</td>
        <td>Confections</td>
        <td>10 - 4 oz boxes</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">33</td>
        <td align="center">48</td>
        <td>Chocolade</td>
        <td>Zaanse Snoepfabriek</td>
        <td>Confections</td>
        <td>10 pkgs.</td>
        <td>$13</td>
      </tr>
      <tr>
        <td align="center">34</td>
        <td align="center">49</td>
        <td>Maxilaku</td>
        <td>Karkki Oy</td>
        <td>Confections</td>
        <td>24 - 50 g pkgs.</td>
        <td>$20</td>
      </tr>
      <tr>
        <td align="center">35</td>
        <td align="center">50</td>
        <td>Valkoinen suklaa</td>
        <td>Karkki Oy</td>
        <td>Confections</td>
        <td>12 - 100 g bars</td>
        <td>$16</td>
      </tr>
      <tr>
        <td align="center">36</td>
        <td align="center">62</td>
        <td>Tarte au sucre</td>
        <td>For�ts d�rables</td>
        <td>Confections</td>
        <td>48 pies</td>
        <td>$49</td>
      </tr>
      <tr>
        <td align="center">37</td>
        <td align="center">68</td>
        <td>Scottish Longbreads</td>
        <td>Specialty Biscuits, Ltd.</td>
        <td>Confections</td>
        <td>10 boxes x 8 pieces</td>
        <td>$13</td>
      </tr>
      <tr>
        <td align="center">38</td>
        <td align="center">11</td>
        <td>Queso Cabrales</td>
        <td>Cooperativa de Quesos Las Cabras</td>
        <td>Dairy Products</td>
        <td>1 kg pkg.</td>
        <td>$21</td>
      </tr>
      <tr>
        <td align="center">39</td>
        <td align="center">12</td>
        <td>Queso Manchego La Pastora</td>
        <td>Cooperativa de Quesos Las Cabras</td>
        <td>Dairy Products</td>
        <td>10 - 500 g pkgs.</td>
        <td>$38</td>
      </tr>
      <tr>
        <td align="center">40</td>
        <td align="center">31</td>
        <td>Gorgonzola Telino</td>
        <td>Formaggi Fortini s.r.l.</td>
        <td>Dairy Products</td>
        <td>12 - 100 g pkgs</td>
        <td>$13</td>
      </tr>
      <tr>
        <td align="center">41</td>
        <td align="center">32</td>
        <td>Mascarpone Fabioli</td>
        <td>Formaggi Fortini s.r.l.</td>
        <td>Dairy Products</td>
        <td>24 - 200 g pkgs.</td>
        <td>$32</td>
      </tr>
      <tr>
        <td align="center">42</td>
        <td align="center">33</td>
        <td>Geitost</td>
        <td>Norske Meierier</td>
        <td>Dairy Products</td>
        <td>500 g</td>
        <td>$3</td>
      </tr>
      <tr>
        <td align="center">43</td>
        <td align="center">59</td>
        <td>Raclette Courdavault</td>
        <td>Gai p�turage</td>
        <td>Dairy Products</td>
        <td>5 kg pkg.</td>
        <td>$55</td>
      </tr>
      <tr>
        <td align="center">44</td>
        <td align="center">60</td>
        <td>Camembert Pierrot</td>
        <td>Gai p�turage</td>
        <td>Dairy Products</td>
        <td>15 - 300 g rounds</td>
        <td>$34</td>
      </tr>
      <tr>
        <td align="center">45</td>
        <td align="center">69</td>
        <td>Gudbrandsdalsost</td>
        <td>Norske Meierier</td>
        <td>Dairy Products</td>
        <td>10 kg pkg.</td>
        <td>$36</td>
      </tr>
      <tr>
        <td align="center">46</td>
        <td align="center">71</td>
        <td>Fl�temysost</td>
        <td>Norske Meierier</td>
        <td>Dairy Products</td>
        <td>10 - 500 g pkgs.</td>
        <td>$22</td>
      </tr>
      <tr>
        <td align="center">47</td>
        <td align="center">72</td>
        <td>Mozzarella di Giovanni</td>
        <td>Formaggi Fortini s.r.l.</td>
        <td>Dairy Products</td>
        <td>24 - 200 g pkgs.</td>
        <td>$35</td>
      </tr>
      <tr>
        <td align="center">48</td>
        <td align="center">22</td>
        <td>Gustafs Kn�ckebr�d</td>
        <td>PB Kn�ckebr�d AB</td>
        <td>Grains/Cereals</td>
        <td>24 - 500 g pkgs.</td>
        <td>$21</td>
      </tr>
      <tr>
        <td align="center">49</td>
        <td align="center">23</td>
        <td>Tunnbr�d</td>
        <td>PB Kn�ckebr�d AB</td>
        <td>Grains/Cereals</td>
        <td>12 - 250 g pkgs.</td>
        <td>$9</td>
      </tr>
      <tr>
        <td align="center">50</td>
        <td align="center">42</td>
        <td>Singaporean Hokkien Fried Mee</td>
        <td>Leka Trading</td>
        <td>Grains/Cereals</td>
        <td>32 - 1 kg pkgs.</td>
        <td>$14</td>
      </tr>
      <tr>
        <td align="center">51</td>
        <td align="center">52</td>
        <td>Filo Mix</td>
        <td>Gday, Mate</td>
        <td>Grains/Cereals</td>
        <td>16 - 2 kg boxes</td>
        <td>$7</td>
      </tr>
      <tr>
        <td align="center">52</td>
        <td align="center">56</td>
        <td>Gnocchi di nonna Alice</td>
        <td>Pasta Buttini s.r.l.</td>
        <td>Grains/Cereals</td>
        <td>24 - 250 g pkgs.</td>
        <td>$38</td>
      </tr>
      <tr>
        <td align="center">53</td>
        <td align="center">57</td>
        <td>Ravioli Angelo</td>
        <td>Pasta Buttini s.r.l.</td>
        <td>Grains/Cereals</td>
        <td>24 - 250 g pkgs.</td>
        <td>$20</td>
      </tr>
      <tr>
        <td align="center">54</td>
        <td align="center">64</td>
        <td>Wimmers gute Semmelkn�del</td>
        <td>Plutzer Lebensmittelgro�m�rkte AG</td>
        <td>Grains/Cereals</td>
        <td>20 bags x 4 pieces</td>
        <td>$33</td>
      </tr>
      <tr>
        <td align="center">55</td>
        <td align="center">9</td>
        <td>Mishi Kobe Niku</td>
        <td>Tokyo Traders</td>
        <td>Meat/Poultry</td>
        <td>18 - 500 g pkgs.</td>
        <td>$97</td>
      </tr>
      <tr>
        <td align="center">56</td>
        <td align="center">17</td>
        <td>Alice Mutton</td>
        <td>Pavlova, Ltd.</td>
        <td>Meat/Poultry</td>
        <td>20 - 1 kg tins</td>
        <td>$39</td>
      </tr>
      <tr>
        <td align="center">57</td>
        <td align="center">29</td>
        <td>Th�ringer Rostbratwurst</td>
        <td>Plutzer Lebensmittelgro�m�rkte AG</td>
        <td>Meat/Poultry</td>
        <td>50 bags x 30 sausgs.</td>
        <td>$124</td>
      </tr>
      <tr>
        <td align="center">58</td>
        <td align="center">53</td>
        <td>Perth Pasties</td>
        <td>Gday, Mate</td>
        <td>Meat/Poultry</td>
        <td>48 pieces</td>
        <td>$33</td>
      </tr>
      <tr>
        <td align="center">59</td>
        <td align="center">54</td>
        <td>Tourti�re</td>
        <td>Ma Maison</td>
        <td>Meat/Poultry</td>
        <td>16 pies</td>
        <td>$7</td>
      </tr>
      <tr>
        <td align="center">60</td>
        <td align="center">55</td>
        <td>P�t� chinois</td>
        <td>Ma Maison</td>
        <td>Meat/Poultry</td>
        <td>24 boxes x 2 pies</td>
        <td>$24</td>
      </tr>
      <tr>
        <td align="center">61</td>
        <td align="center">7</td>
        <td>Uncle Bobs Organic Dried Pears</td>
        <td>Grandma Kellys Homestead</td>
        <td>Produce</td>
        <td>12 - 1 lb pkgs.</td>
        <td>$30</td>
      </tr>
      <tr>
        <td align="center">62</td>
        <td align="center">14</td>
        <td>Tofu</td>
        <td>Mayumis</td>
        <td>Produce</td>
        <td>40 - 100 g pkgs.</td>
        <td>$23</td>
      </tr>
      <tr>
        <td align="center">63</td>
        <td align="center">28</td>
        <td>R�ssle Sauerkraut</td>
        <td>Plutzer Lebensmittelgro�m�rkte AG</td>
        <td>Produce</td>
        <td>25 - 825 g cans</td>
        <td>$46</td>
      </tr>
      <tr>
        <td align="center">64</td>
        <td align="center">51</td>
        <td>Manjimup Dried Apples</td>
        <td>Gday, Mate</td>
        <td>Produce</td>
        <td>50 - 300 g pkgs.</td>
        <td>$53</td>
      </tr>
      <tr>
        <td align="center">65</td>
        <td align="center">74</td>
        <td>Longlife Tofu</td>
        <td>Tokyo Traders</td>
        <td>Produce</td>
        <td>5 kg pkg.</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">66</td>
        <td align="center">10</td>
        <td>Ikura</td>
        <td>Tokyo Traders</td>
        <td>Seafood</td>
        <td>12 - 200 ml jars</td>
        <td>$31</td>
      </tr>
      <tr>
        <td align="center">67</td>
        <td align="center">13</td>
        <td>Konbu</td>
        <td>Mayumis</td>
        <td>Seafood</td>
        <td>2 kg box</td>
        <td>$6</td>
      </tr>
      <tr>
        <td align="center">68</td>
        <td align="center">18</td>
        <td>Carnarvon Tigers</td>
        <td>Pavlova, Ltd.</td>
        <td>Seafood</td>
        <td>16 kg pkg.</td>
        <td>$63</td>
      </tr>
      <tr>
        <td align="center">69</td>
        <td align="center">30</td>
        <td>Nord-Ost Matjeshering</td>
        <td>Nord-Ost-Fisch Handelsgesellschaft mbH</td>
        <td>Seafood</td>
        <td>10 - 200 g glasses</td>
        <td>$26</td>
      </tr>
      <tr>
        <td align="center">70</td>
        <td align="center">36</td>
        <td>Inlagd Sill</td>
        <td>Svensk Sj�f�da AB</td>
        <td>Seafood</td>
        <td>24 - 250 g jars</td>
        <td>$19</td>
      </tr>
      <tr>
        <td align="center">71</td>
        <td align="center">37</td>
        <td>Gravad lax</td>
        <td>Svensk Sj�f�da AB</td>
        <td>Seafood</td>
        <td>12 - 500 g pkgs.</td>
        <td>$26</td>
      </tr>
      <tr>
        <td align="center">72</td>
        <td align="center">40</td>
        <td>Boston Crab Meat</td>
        <td>New England Seafood Cannery</td>
        <td>Seafood</td>
        <td>24 - 4 oz tins</td>
        <td>$18</td>
      </tr>
      <tr>
        <td align="center">73</td>
        <td align="center">41</td>
        <td>Jacks New England Clam Chowder</td>
        <td>New England Seafood Cannery</td>
        <td>Seafood</td>
        <td>12 - 12 oz cans</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">74</td>
        <td align="center">45</td>
        <td>R�gede sild</td>
        <td>Lyngbysild</td>
        <td>Seafood</td>
        <td>1k pkg.</td>
        <td>$10</td>
      </tr>
      <tr>
        <td align="center">75</td>
        <td align="center">46</td>
        <td>Spegesild</td>
        <td>Lyngbysild</td>
        <td>Seafood</td>
        <td>4 - 450 g glasses</td>
        <td>$12</td>
      </tr>
      <tr>
        <td align="center">76</td>
        <td align="center">58</td>
        <td>Escargots de Bourgogne</td>
        <td>Escargots Nouveaux</td>
        <td>Seafood</td>
        <td>24 pieces</td>
        <td>$13</td>
      </tr>
      <tr>
        <td align="center">77</td>
        <td align="center">73</td>
        <td>R�d Kaviar</td>
        <td>Svensk Sj�f�da AB</td>
        <td>Seafood</td>
        <td>24 - 150 g jars</td>
        <td>$15</td>
      </tr>
      <!-- Tambahkan data lainnya di sini sesuai kebutuhan -->
    </tbody>
  </table>

  <script>
    function searchTable() {
      const column = parseInt(document.getElementById("kat").value);
      const query = document.getElementById("cari").value.toLowerCase();
      const table = document.getElementById("produkTable");
      const rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

      for (let i = 0; i < rows.length; i++) {
        let cells = rows[i].getElementsByTagName("td");
        if (column > 0 && column <= 5) {
          let cellText = cells[column].textContent.toLowerCase();
          rows[i].style.display = cellText.includes(query) ? "" : "none";
        } else {
          rows[i].style.display = ""; // tampilkan semua jika kategori belum dipilih
        }
      }
    }
  </script>

</body>

</html>