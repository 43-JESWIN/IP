import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

public class EmployeeService {
    public List<Employee> getEmployeeList() {
        List<Employee> employeeList = new ArrayList<>();
        SimpleDateFormat sdf = new SimpleDateFormat("yyyy-MM-dd");
        try {
            employeeList.add(new Employee("John", "Doe", sdf.parse("2022-01-15"), 55000));
            employeeList.add(new Employee("Jane", "Smith", sdf.parse("2022-03-20"), 65000));
            employeeList.add(new Employee("Michael", "Johnson", sdf.parse("2021-11-10"), 75000));
        } catch (ParseException e) {
            e.printStackTrace();
        }
        return employeeList;
    }
}
