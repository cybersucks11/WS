<?xml version="1.0"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html"/>

<xsl:template match="/">

<html>
<body>

<h2>Car Details</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Company</th>
<th>Model</th>
<th>Engine</th>
<th>Mileage</th>
</tr>

<xsl:for-each select="cars/car">
<tr>
<td><xsl:value-of select="id"/></td>
<td><xsl:value-of select="company"/></td>
<td><xsl:value-of select="model"/></td>
<td><xsl:value-of select="engine"/></td>
<td><xsl:value-of select="mileage"/></td>
</tr>
</xsl:for-each>

</table>

</body>
</html>

</xsl:template>
</xsl:stylesheet>
