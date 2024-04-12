import java.util.Date;

public class Employee {
    public String firstName;
    public String lastName;
    public Date hireDate;
    public double salary;

    public Employee(String firstName, String lastName, Date hireDate, double salary) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.hireDate = hireDate;
        this.salary = salary;
    }

    public String getFirstName() {
        return firstName;
    }

    public String getLastName() {
        return lastName;
    }

    public Date getHireDate() {
        return hireDate;
    }

    public double getSalary() {
        return salary;
    }
}

