import os
import glob

def rename_files_to_numbers(folder_path):
    """
    Renames all files in a folder to numbered .webp files
    Example: 1.webp, 2.webp, 3.webp, etc.
    """
    try:
        # Get all files in the folder (excluding subdirectories)
        files = [f for f in os.listdir(folder_path) 
                if os.path.isfile(os.path.join(folder_path, f))]
        
        # Sort files to maintain consistent order
        files.sort()
        
        # Counter for numbering
        count = 0
        
        for filename in files:
            # Get file extension
            file_extension = os.path.splitext(filename)[1]
            
            # Create new filename (always .webp extension)
            new_filename = f"{count}.webp"
            
            # Full paths
            old_path = os.path.join(folder_path, filename)
            new_path = os.path.join(folder_path, new_filename)
            
            # Check if new filename already exists to avoid conflicts
            if os.path.exists(new_path):
                print(f"Warning: {new_filename} already exists. Skipping {filename}")
                continue
            
            # Rename the file
            os.rename(old_path, new_path)
            print(f"Renamed: {filename} → {new_filename}")
            
            count += 1
            
        print(f"\nSuccessfully renamed {count-1} files!")
        
    except FileNotFoundError:
        print(f"Error: Folder '{folder_path}' not found!")
    except PermissionError:
        print(f"Error: Permission denied for folder '{folder_path}'")
    except Exception as e:
        print(f"An error occurred: {str(e)}")

# Usage
if __name__ == "__main__":
    # Specify the folder path here
    # Example: folder_path = "/path/to/your/folder"
    folder_path = "an_imgs"  # Current directory
    
    # Uncomment and modify the line below to use a specific folder
    # folder_path = "C:/Users/YourName/Pictures"
    
    rename_files_to_numbers(folder_path)
