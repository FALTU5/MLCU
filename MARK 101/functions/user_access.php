<?php
    function access($data)
    {
        switch($data)
        {
            case 'TECHNICAL ADMIN': header('Location:users/technical/');
                                    break;
            case 'HOD': header('Location:users/hod/');
                        break;
            case 'HR':  header('Location:users/hr/');
                        break;
            case 'FACULTY': header('Location:users/faculty/');
                            break;
            default: echo "NOT FOUND";
                        break;
        }
    }

?>
