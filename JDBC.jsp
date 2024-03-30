<%@page contentType="text/html;charset=UTF-8" language="java" %>
%@page import="java.sql.Connection" %
%@page import="java.sql.DriverManager" %
%@page import="java.sql.Statement" %
%@page import="java.sql.ResultSet" %
<html>
<head>
    <title>JDBC Program</title>
</head>
<body>
    <%
        Int number_Of_Invoices = 0;
        Double total_Amount_Of_All_Invoices = 0.0;
        Double average_Of_All_Invoices = 0.0;
        Connection con = null;
        Statement st = null;
        ResultSet rs = null;
        String query = "SELECT * FROM invoices";
        Try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            Con = DriverManager.getConnection("jdbc:mysql://localhost:3306/internetprogramming", "root", "Jeswin@4693");
            St = con.createStatement();
            Rs = st.executeQuery(query);

        } catch (Exception e) {
            Out.println("Error establishing database connection: " + e.getMessage());
        }
        While(rs.next())
        {
            Number_Of_Invoices++;
            Double total = rs.getDouble("total_amount");
            Total_Amount_Of_All_Invoices += total;
        }
        Average_Of_All_Invoices = total_Amount_Of_All_Invoices / number_Of_Invoices;
    %>
    <table border = 1>
        <thead>
            <th style = "font-size : 30px">Number_Of_Invoices</th>
            <th style = "font-size : 30px">Total_Amount_Of_All_Invoices</th>
            <th style = "font-size : 30px">Average_Of_All_Invoices</th>
        </thead>
        <tbody>
            <tr>
                <td style = "font-size : 25px"><%= number_Of_Invoices %></td>
                <td style = "font-size : 25px"><%= total_Amount_Of_All_Invoices %></td>
                <td style = "font-size : 25px"><%= average_Of_All_Invoices %></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
