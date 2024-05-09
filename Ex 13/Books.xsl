<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
<head>
<style>
table {
border-collapse: collapse;
width: 100%;
}
th, td {
border: 1px solid black;
padding: 8px;
text-align: left;
}
tr:nth-child(even) {
background-color: yellow;
}
.highlight {
background-color: yellow;
}
</style>
</head>
<body>
<h2>Book Information</h2>
<table>
<tr>
<th>Title</th>
<th>Author</th>
<th>Genre</th>
<th>Price</th>
</tr>
<xsl:apply-templates/>
</table>
</body>
</html>
</xsl:template>
<xsl:template match="book">
<xsl:variable name="genre" select="genre"/>
<xsl:variable name="price" select="price"/>
<tr>
<xsl:if test="$genre='Mystery' or $price > 25">
<xsl:attribute name="class">highlight</xsl:attribute>
</xsl:if>
<td><xsl:value-of select="title"/></td>
<td><xsl:value-of select="author"/></td>
<td><xsl:value-of select="genre"/></td>
<td><xsl:value-of select="format-number(price, '#,##0.00')"/></td>
</tr>
</xsl:template>
</xsl:stylesheet>