# Employee Attendance & Leave Management System

A lightweight web application for managing employee attendance and leave records using JSON file storage.

## Features

- **Employee Record Management**: Add new employee attendance/leave records
- **Data Listing**: View all records in a clean table format
- **No Database Required**: Uses JSON file storage
- **Bootstrap UI**: Responsive and modern interface
- **Simple Architecture**: Easy to deploy and modify

## Requirements

- Web server with PHP support (Apache, Nginx, etc.)
- PHP 7.0+
- Modern web browser
- (No database required)

## Usage

### Adding Records
1. Navigate to `add.html`
2. Fill in the employee details:
   - Employee Name
   - Attendance Status
   - Leave Type (if applicable)
   - Date
3. Submit the form

### Viewing Records
1. Navigate to `list.html`
2. View all existing records in tabular format
3. Records are automatically sorted by date

## Technical Details

### Data Storage
- All records are stored in `php/records.json`
- PHP handles all read/write operations
- JSON structure:
  ```json
  [
    {
      "id": 1,
      "employee_name": "John Doe",
      "attendance_status": "Present",
      "leave_type": "",
      "date": "2023-06-15"
    }
  ]
  ```

### API Endpoints
- `POST php/add_record.php` - Add new record
  - Parameters: `employee_name`, `attendance_status`, `leave_type`, `date`
- `GET php/get_records.php` - Get all records
  - Returns: JSON array of all records

## Customization

### Adding New Fields
1. Edit `html/add.html` to add new form fields
2. Modify `php/add_record.php` to handle the new fields
3. Update `html/list.html` to display the new fields

### Changing Styling
- Edit the Bootstrap classes in HTML files
- Or add custom CSS in a new file under `css/` directory

## Troubleshooting

### Common Issues
1. **Records not saving**:
   - Check PHP error logs
   - Verify `records.json` has correct permissions (writable by web server)

2. **JSON file not updating**:
   - Ensure PHP has write permissions to the directory
   - Check for syntax errors in existing JSON data

3. **Form not submitting**:
   - Verify all required fields are filled
   - Check browser console for JavaScript errors
