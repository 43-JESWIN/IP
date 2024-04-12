<%@page import="java.util.List"%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@ taglib prefix="fmt" uri="http://java.sun.com/jsp/jstl/fmt" %>

<%@ page import="EmployeeService" %>
<%@ page import="Employee" %>

<%
    EmployeeService employeeService = new EmployeeService();
    List<Employee> employeeList = employeeService.getEmployeeList();
%>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Information</title>
    <style>
        .high-salary {
            background-color: yellow;
        }
    </style>
</head>
<body>
<table border="1">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Hire Date</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
    <c:forEach var="employee" items="${employeeList}">
      <c:set var="salaryClass" value="${employee.salary > 60000 ? 'high-salary' : ''}"/>
      <tr class="${salaryClass}">
        <td>${employee.firstName}</td>
        <td>${employee.lastName}</td>
        <td><fmt:formatDate value="${employee.hireDate}" pattern="MM/dd/yyyy"/></td>
        <td><fmt:formatNumber value="${employee.salary}" type="currency"/></td>
      </tr>
    </c:forEach>
  </tbody>
</table>
</body>
</html>
