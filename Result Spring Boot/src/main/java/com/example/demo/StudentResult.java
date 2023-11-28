package com.example.demo;

public class StudentResult {
    private String studentName;
    private int dataStructureMarks;
    private int operatingSystemMarks;
    private int theoryOfComputationMarks;
    private int coaMarks;
    private int ediMarks;
    
    private String dataStructureGrade;
    private String operatingSystemGrade;
    private String theoryOfComputationGrade;
    private String coaGrade;
    private String ediGrade;

    public StudentResult() {
    }

    // Getters and setters for studentName, dataStructureMarks, operatingSystemMarks, theoryOfComputationMarks,
    // coaMarks, ediMarks, dataStructureGrade, operatingSystemGrade, theoryOfComputationGrade, coaGrade, ediGrade

    // Student Name
    public String getStudentName() {
        return studentName;
    }

    public void setStudentName(String studentName) {
        this.studentName = studentName;
    }

    // Data Structure Marks
    public int getDataStructureMarks() {
        return dataStructureMarks;
    }

    public void setDataStructureMarks(int dataStructureMarks) {
        this.dataStructureMarks = dataStructureMarks;
    }

    // Operating System Marks
    public int getOperatingSystemMarks() {
        return operatingSystemMarks;
    }

    public void setOperatingSystemMarks(int operatingSystemMarks) {
        this.operatingSystemMarks = operatingSystemMarks;
    }

    // Theory of Computation Marks
    public int getTheoryOfComputationMarks() {
        return theoryOfComputationMarks;
    }

    public void setTheoryOfComputationMarks(int theoryOfComputationMarks) {
        this.theoryOfComputationMarks = theoryOfComputationMarks;
    }

    // COA Marks
    public int getCoaMarks() {
        return coaMarks;
    }

    public void setCoaMarks(int coaMarks) {
        this.coaMarks = coaMarks;
    }

    // EDI Marks
    public int getEdiMarks() {
        return ediMarks;
    }

    public void setEdiMarks(int ediMarks) {
        this.ediMarks = ediMarks;
    }

    // Data Structure Grade
    public String getDataStructureGrade() {
        return dataStructureGrade;
    }

    public void setDataStructureGrade(String dataStructureGrade) {
        this.dataStructureGrade = dataStructureGrade;
    }

    // Operating System Grade
    public String getOperatingSystemGrade() {
        return operatingSystemGrade;
    }

    public void setOperatingSystemGrade(String operatingSystemGrade) {
        this.operatingSystemGrade = operatingSystemGrade;
    }

    // Theory of Computation Grade
    public String getTheoryOfComputationGrade() {
        return theoryOfComputationGrade;
    }

    public void setTheoryOfComputationGrade(String theoryOfComputationGrade) {
        this.theoryOfComputationGrade = theoryOfComputationGrade;
    }

    // COA Grade
    public String getCoaGrade() {
        return coaGrade;
    }

    public void setCoaGrade(String coaGrade) {
        this.coaGrade = coaGrade;
    }

    // EDI Grade
    public String getEdiGrade() {
        return ediGrade;
    }

    public void setEdiGrade(String ediGrade) {
        this.ediGrade = ediGrade;
    }
}
